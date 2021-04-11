<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);

        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'Admin'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'Admin.reportefactura.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reportefactura.altafactura'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reportefactura.modificafactura'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reportefactura.borrafactura'])->syncRoles([$role1,$role2]);


        Permission::create(['name' => 'Admin.reporteempleado.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reporteempleado.altaempleado'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reporteempleado.pruebaempleado'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'Admin.reporteempleado.borraempleado'])->syncRoles([$role1,$role2]);



    }
}
