<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Minino',
            'phone' => '64304967',
            'email' => 'minino@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name' => 'Rojas Colindres',
            'phone' => '11223355',
            'email' => 'rojas@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')
        ]);

        // crear role Administrador
        $admin    = Role::create(['name' => 'Admin']);

        // crear permisos componente categories
        Permission::create(['name' => 'Category_Create']);
        Permission::create(['name' => 'Category_Search']);
        Permission::create(['name' => 'Category_Update']);
        Permission::create(['name' => 'Category_Destroy']);

        // asignar permisos al rol Admin sobre categories
        $admin->givePermissionTo(['Category_Create', 'Category_Search', 'Category_Update', 'Category_Destroy']);

        // asignar role Admin al usuario Minino
        $uAdmin = User::find(1);
        $uAdmin->assignRole('Admin');
    }
}
