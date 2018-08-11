<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 6/25/18
 * Time: 6:11 PM
 */

namespace App\Providers;


use App\Serializers\ApiSerializers;
use Illuminate\Support\ServiceProvider;
use League\Fractal\Manager;

class JSONApiServiceProvider extends ServiceProvider
{

    public function register()
    {
        //for api response serialize
        $this->app->bind('League\Fractal\Manager', function($app) {
            $manager = new Manager();
            // Use the serializer of your choice.
            $manager->setSerializer(new ApiSerializers());
            return $manager;
        });
    }
}
