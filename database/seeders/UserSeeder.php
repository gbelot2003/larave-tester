<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::factory(10)->create();

        foreach($users as $user) {
            $user->assignRole('standard');
        }

        $admin = \App\Models\User::factory()->create([
            'name' => 'Gerardo Belot',
            'email' => 'gbelot2003@hotmail.com',
        ]);

        $admin->assignRole('admin');
    }
}
