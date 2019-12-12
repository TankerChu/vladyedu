<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$iB7JVP6ID1krFWc.j6jxEeh54BS/upyXrCbmFd7l3FFRcQ.YOC8va',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
