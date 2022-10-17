<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrCreate([
            'name' => 'Admin'
        ]);

        $users = [
            [
                "name" => "Pasha",
                "email" => "pasha@gmail.com",
                "password" => Hash::make('password'),
                "email_verified_at" => now()
            ]
        ];

        foreach($users as $user)
        {
            $newUser = User::create($user);

            $newUser->assignRole($role);

        }
    }
}
