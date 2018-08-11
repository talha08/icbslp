<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 8/11/18
 * Time: 6:14 PM
 */

namespace App\Services;


use App\Repositories\UserRepository;
use App\Responses\ApiResponse;

class UserService extends BaseService
{
    /**
     * @var ApiResponse
     */
    private $apiResponse;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     * @param ApiResponse $apiResponse
     * @param UserRepository $userRepository
     */
    public function __construct(ApiResponse $apiResponse, UserRepository $userRepository)
    {
        $this->apiResponse = $apiResponse;
        $this->userRepository = $userRepository;
    }


    /**
     * return Repository instance
     *
     * @return mixed
     */
    public function baseRepository()
    {
       return $this->userRepository;
    }
}
