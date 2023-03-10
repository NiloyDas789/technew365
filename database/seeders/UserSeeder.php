<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultSettings();
        $this->createDefaultRolePermissions();
        $this->createDefaultUsers();
        $this->createDemoUsers();
    }

    private function createDefaultSettings()
    {
        CompanySetting::create([
            'name'                 => 'Niloy Das  ',
            'mobile1'              => '01xxxxxxxxx',
            'email'                => 'info@gmail.com',
        ]);
    }

    private function createDefaultRolePermissions()
    {
        $permissions = [
            ['name' => 'user.access'],
            ['name' => 'user.create'],
            ['name' => 'user.edit'],
            ['name' => 'user.show'],
            ['name' => 'user.delete'],

            ['name' => 'status.access'],
            ['name' => 'status.create'],
            ['name' => 'status.edit'],
            ['name' => 'status.show'],
            ['name' => 'status.delete'],


            ['name' => 'contact_message.access'],
            ['name' => 'contact_message.delete'],

            ['name' => 'profile.access'],
            ['name' => 'profile.edit'],

            ['name' => 'settings.access'],
            ['name' => 'settings.edit'],

            ['name' => 'role.access'],
            ['name' => 'role.create'],
            ['name' => 'role.edit'],
            ['name' => 'role.show'],
            ['name' => 'role.delete'],

            ['name' => 'role_permission.assign'],


        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission["name"]
            ]);
        };


        //get all permissions via Gate::before rule; see AuthServiceProvider
        Role::create([
            'name' => 'Admin'
        ]);

        $userPermissions = [
            'profile.access',
            'profile.edit',
        ];

        Role::create([
            'name' => 'User'
        ])->givePermissionTo($userPermissions);
    }

    private function createDefaultUsers()
    {
        $admin=User::create([
            'name'              => 'Admin',
            'email'             => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123123'),
            'remember_token'    => Str::random(10),
        ]);
        $admin->assignRole('Admin');
    }

    private function createDemoUsers()
    {
        $user=User::create([
            'name'              => 'User',
            'email'             => 'user@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123123123'),
            'remember_token'    => Str::random(10),
        ]);
        $user->assignRole('User');
    }
}
