<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'Admin@admin.admin',
            'role' => 1,
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'User',
            'email' => 'User@user.user',
            'role' => 2,
            'password' => Hash::make('user'),
        ]);
        User::create([
            'name' => 'Editor',
            'email' => 'Editor@editor.editor',
            'role' => 3,
            'password' => Hash::make('editor'),
        ]);
    }
}
