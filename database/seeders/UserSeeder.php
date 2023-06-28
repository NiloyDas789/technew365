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
            'name'                 => 'Niloy Das',
            'mobile1'              => '01800000000000',
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

            ['name' => 'course.access'],
            ['name' => 'course.create'],
            ['name' => 'course.edit'],
            ['name' => 'course.show'],
            ['name' => 'course.delete'],

            ['name' => 'event.access'],
            ['name' => 'event.create'],
            ['name' => 'event.edit'],
            ['name' => 'event.show'],
            ['name' => 'event.delete'],

            ['name' => 'job.access'],
            ['name' => 'job.create'],
            ['name' => 'job.edit'],
            ['name' => 'job.show'],
            ['name' => 'job.delete'],

            ['name' => 'latest-tech.access'],
            ['name' => 'latest-tech.create'],
            ['name' => 'latest-tech.edit'],
            ['name' => 'latest-tech.show'],
            ['name' => 'latest-tech.delete'],

            ['name' => 'book.access'],
            ['name' => 'book.create'],
            ['name' => 'book.edit'],
            ['name' => 'book.show'],
            ['name' => 'book.delete'],

            ['name' => 'gallery.access'],
            ['name' => 'gallery.create'],
            ['name' => 'gallery.edit'],
            ['name' => 'gallery.show'],
            ['name' => 'gallery.delete'],

            ['name' => 'certification.access'],
            ['name' => 'certification.create'],
            ['name' => 'certification.edit'],
            ['name' => 'certification.show'],
            ['name' => 'certification.delete'],

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
            'name'              => 'Super Admin',
            'email'             => 'black@gmail.com',
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
