<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = ['user', 'admin', 'master'];
        $default = [
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ];

        foreach ($users as $value) {
            $user = User::firstOrCreate(
                ['email' => $value . '@gmail.com'],
                [...$default, ...[
                    'name' => $value,
                ]]
            );

            $user->syncRoles([$value]);
        }
    }
}
