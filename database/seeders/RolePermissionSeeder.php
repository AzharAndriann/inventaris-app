<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate([
            'name' => 'admin',
        ],
        ['name' => 'admin']
    );
        $role_operator = Role::updateOrCreate([
            'name' => 'operator',
        ],
        ['name' => 'operator']
    );
        $role_petugas = Role::updateOrCreate([
            'name' => 'petugas',
        ],
        ['name' => 'petugas']
    );

        
        $permission1 = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard_admin',
            ],
            ['name' => 'view_dashboard_admin']
        );
        $permission2 = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard_operator',
            ],
            ['name' => 'view_dashboard_operator']
        );
        $permission3 = Permission::updateOrCreate(
            [
                'name' => 'view_dashboard_petugas',
            ],
            ['name' => 'view_dashboard_petugas']
        );



        $role_admin->givePermissionTo($permission1);
        $role_operator->givePermissionTo($permission2);
        $role_petugas->givePermissionTo($permission3);


        
        // $admin = User::find(7);
        // $admin->assignRole('admin');

        $operator = User::find(13);
        $operator->assignRole('operator');

        $petugas = User::find(14);
        $petugas->assignRole('petugas');


        


    }
}
