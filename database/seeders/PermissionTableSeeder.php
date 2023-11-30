<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'votante-list',
            'votante-create',
            'votante-edit',
            'votante-delete',
            'registro-list',
            'registro-create',
            'registro-edit',
            'registro-delete',
            'reporte-list',
            'reporte-create',
            'reporte-edit',
            'reporte-delete',
        ];
            
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
