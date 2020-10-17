<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'create_user',
            'is_main' => 1,
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'edit_user',
            'is_main' => 1,
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'update_user',
            'is_main' => 1,
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'delete_user',
            'is_main' => 1,
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'show_user',
            'is_main' => 1,
            'guard_name' => 'web',
        ]);
    }
}
