<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Providers\AuthServiceProvider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //Permission
        Permission::create(['name'=>'manage_user','guard_name'=>'web']);
        Permission::create(['name'=>'manage_role','guard_name'=>'web']);
        Permission::create(['name'=>'manage_permission','guard_name'=>'web']); 
        Permission::create(['name'=>'setting_system','guard_name'=>'web']);
        Permission::create(['name'=>'setting_home','guard_name'=>'web']);

        // Roles
        $role_admin = Role::firstOrCreate(['name' => AuthServiceProvider::ROLE_SUPPER_ADMIN,'guard_name'=>'web']);
        Role::firstOrCreate(['name' => 'user','guard_name'=>'web']);


        // Users
        $user = User::firstOrCreate(
            ['email' => 'nguyenvanhaudev@gmail.com'],
            [
                'name' => 'Nguyễn Văn Hậu',
                'password' => Hash::make('@1234'),
                'email_verified_at' => now()
            ]
        );
        $user->assignRole(AuthServiceProvider::ROLE_SUPPER_ADMIN);
        for ($i = 1; $i <= 1000; $i++){
            // Users
            $user = User::Create(
                [
                    'email' => 'nguyenvanhaudev'.$i.'@gmail.com',
                    'name' => 'Nguyễn Văn Hậu'.$i,
                    'password' => Hash::make('@1234'),
                    'email_verified_at' => now()
                ]
            );
    }

    }
}
