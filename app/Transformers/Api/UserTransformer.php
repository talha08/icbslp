<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 8/11/18
 * Time: 5:44 PM
 */

namespace App\Transformers\Api;
use App\Models\RoleUser;
use App\Transformers\ApiTransformerAbstract;

class UserTransformer extends ApiTransformerAbstract
{
    public function getTransformableFields($entity)
    {
        $userRole = RoleUser::where('user_id', $entity->id)->first();
        return [
            'id' => (int)$entity->id,
            'name' => $entity->name,
            'email' => $entity->email,
            'photo_url' => $entity->photo_url,
            'role' => $userRole->role
        ];
    }

}
