<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
Use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'Publi']);

        Permission::create(['name'=> 'admin.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.update'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.receitas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.receitas.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.receitas.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.receitas.destroy'])->syncRoles([$role1, $role2]);


        Permission::create(['name'=>'admin.ingredientes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.ingredientes.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.ingredientes.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.ingredientes.destroy'])->syncRoles([$role1]);
    }
}