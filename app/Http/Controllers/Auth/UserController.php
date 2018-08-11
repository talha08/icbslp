<?php

namespace App\Http\Controllers\Auth;

use App\Responses\ApiResponse;
use App\Transformers\Api\UserTransformer;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var ApiResponse
     */
    private $apiResponse;

    /**
     * UserController constructor.
     * @param ApiResponse $apiResponse
     */
    public function __construct(ApiResponse $apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    public function getUser()
    {
        $user = auth()->user();
        return  $this->apiResponse->withItem($user, new UserTransformer());
    }
}
