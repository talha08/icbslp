<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test Admin',
            'email' => 'test@admin.com',
            'password' => bcrypt('a')
        ]);
        User::create([
            'name' => 'Test User1',
            'email' => 'test@user1.com',
            'password' => bcrypt('a')
        ]);
        User::create([
            'name' => 'Test User2',
            'email' => 'test@user2.com',
            'password' => bcrypt('a')
        ]);
    }
}
