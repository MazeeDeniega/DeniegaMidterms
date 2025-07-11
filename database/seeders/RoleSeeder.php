<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = ['Admin', 'Teacher', 'Student'];

        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role,
                'description' => $role . ' role',
            ]);
        }
    }
}
