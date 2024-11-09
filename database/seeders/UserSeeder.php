<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::create([
            'name' => 'Admin',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('123123123'),
        ]);

        $role = Role::firstOrCreate([
            'title' => Role::getRoles()[Role::EDITOR],
            'role_idx' => Role::EDITOR,
        ]);

        $users->roles()->sync($role->id);
    }
}
