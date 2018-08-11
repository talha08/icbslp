<?php
/**
 * Created by PhpStorm.
 * User: rat
 * Date: 2/9/18
 * Time: 10:06 AM
 */

namespace App\Responses;

use EllipseSynergie\ApiResponse\AbstractResponse;
use League\Fractal\Pagination\Cursor;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Validation\Validator;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ApiResponse extends AbstractResponse
{
    /**
     * @param array $array
     * @param array $headers
     * @param int $json_options
     * @return \Illuminate\Http\JsonResponse
     */
    public function withArray(array $array, array $headers = [], $json_options = 0)
    {
        return response()->json($array, $this->statusCode, $headers, $json_options);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function message($message)
    {
        return $this->withArray(['message' => $message]);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($message)
    {
        return $this->withArray(['data' => $message]);
    }

    public function withItem($data, $transformer, $resourceKey = null, $meta = [], array $headers = [])
    {
        $resource = new Item($data, $transformer, $resourceKey);

        foreach ($meta as $metaKey => $metaValue) {
            $resource->setMetaValue($metaKey, $metaValue);
        }

        if (isset($_GET['include'])) {
            $this->getManager()->parseIncludes($_GET['include']);
        }

        $rootScope = $this->manager->createData($resource);

        return $this->withArray($rootScope->toArray(), $headers);
    }

    public function withCollection($data, $transformer, $resourceKey = null, Cursor $cursor = null, $meta = [], array $headers = [])
    {
        $resource = new Collection($data, $transformer, $resourceKey);

        foreach ($meta as $metaKey => $metaValue) {
            $resource->setMetaValue($metaKey, $metaValue);
        }

        if (!is_null($cursor)) {
            $resource->setCursor($cursor);
        }

        if (isset($_GET['include'])) {
            $this->getManager()->parseIncludes($_GET['include']);
        }

        $rootScope = $this->manager->createData($resource);

        return $this->withArray($rootScope->toArray(), $headers);
    }

    /**
     * @param $message
     * @param $statusCode
     * @param array $headers
     * @return mixed
     */
    public function withErrorAndStatus($message, $statusCode, array $headers = [])
    {
        return $this->setStatusCode($statusCode)->withError($message, '', $headers);
    }

    public function withPaginator(LengthAwarePaginator $paginator, $transformer, $resourceKey = 'data', $meta = [])
    {
        $queryParams = array_diff_key($_GET, array_flip(['page']));
        $paginator->appends($queryParams);

        $resource = new Collection($paginator->items(), $transformer, $resourceKey);
        $resource->setPaginator(new IlluminatePaginatorAdapter($paginator));

        foreach ($meta as $metaKey => $metaValue) {
            $resource->setMetaValue($metaKey, $metaValue);
        }

        if (isset($_GET['include'])) {
            $this->getManager()->parseIncludes($_GET['include']);
        }

        $rootScope = $this->manager->createData($resource);

        return $this->withArray($rootScope->toArray());
    }

    /**
     * Generates a Response with a 400 HTTP header and a given message from validator
     *
     * @param Validator $validator
     * @return ResponseFactory
     */
    public function errorWrongArgsValidator(Validator $validator)
    {
        return $this->errorWrongArgs($validator->getMessageBag()->toArray());
    }

    public function toDateArray($dateObject)
    {
        $dateArray = array();

        foreach ($dateObject as $date)
        {
            array_push($dateArray, $date);
        }

        return $this->withArray($dateArray);
    }
}
