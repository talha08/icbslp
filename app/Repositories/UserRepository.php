<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 8/11/18
 * Time: 6:11 PM
 */

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Filter data based on user input
     *
     * @param array $filter
     * @param       $query
     */
    public function filterData(array $filter, $query)
    {
        // TODO: Implement filterData() method.
    }
}
