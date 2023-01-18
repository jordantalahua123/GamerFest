<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Permission::create(['name' => 'showdashboard'])->assignRole($role1);

        Permission::create(['name' => 'aulas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'aulas.create'])->assignRole($role1);
        Permission::create(['name' => 'aulas.update'])->assignRole($role1);
        Permission::create(['name' => 'aulas.delete'])->assignRole($role1);

        Permission::create(['name' => 'horarios.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'horarios.create'])->assignRole($role1);
        Permission::create(['name' => 'horarios.update'])->assignRole($role1);
        Permission::create(['name' => 'horarios.delete'])->assignRole($role1);

        Permission::create(['name' => 'categorias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'categorias.create'])->assignRole($role1);
        Permission::create(['name' => 'categorias.update'])->assignRole($role1);
        Permission::create(['name' => 'categorias.delete'])->assignRole($role1);

        Permission::create(['name' => 'videojuegos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'videojuegos.create'])->assignRole($role1);
        Permission::create(['name' => 'videojuegos.update'])->assignRole($role1);
        Permission::create(['name' => 'videojuegos.delete'])->assignRole($role1);

        Permission::create(['name' => 'eventos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'eventos.create'])->assignRole($role1);
        Permission::create(['name' => 'eventos.update'])->assignRole($role1);
        Permission::create(['name' => 'eventos.delete'])->assignRole($role1);

        Permission::create(['name' => 'equipos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'equipos.create'])->assignRole($role1);
        Permission::create(['name' => 'equipos.update'])->assignRole($role1);
        Permission::create(['name' => 'equipos.delete'])->assignRole($role1);

        Permission::create(['name' => 'jugadores.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'jugadores.create'])->assignRole($role1);
        Permission::create(['name' => 'jugadores.update'])->assignRole($role1);
        Permission::create(['name' => 'jugadores.delete'])->assignRole($role1);

        Permission::create(['name' => 'pagos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'pagos.create'])->assignRole($role1);
        Permission::create(['name' => 'pagos.update'])->assignRole($role1);
        Permission::create(['name' => 'pagos.delete'])->assignRole($role1);

        Permission::create(['name' => 'inscripciongrp.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inscripciongrp.create'])->assignRole($role1);
        Permission::create(['name' => 'inscripciongrp.update'])->assignRole($role1);
        Permission::create(['name' => 'inscripciongrp.delete'])->assignRole($role1);

        Permission::create(['name' => 'inscripcionidv.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inscripcionidv.create'])->assignRole($role1);
        Permission::create(['name' => 'inscripcionidv.update'])->assignRole($role1);
        Permission::create(['name' => 'inscripcionidv.delete'])->assignRole($role1);

    }
}
