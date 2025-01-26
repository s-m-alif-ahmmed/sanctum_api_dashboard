<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run(): void {
        DB::table('users')->insert([
            [
                'id'                    => 1,
                'name'                  => 'admin',
                'email'                 => 'admin@gmail.com',
                'email_verified_at'     => null,
                'password'              => Hash::make('12345678'),
                'avatar'                => null,
                'number'                => null,
                'address'               => null,
                'gender'                => 'male',
                'dob'                   => null,
                'provider'              => null,
                'provider_id'           => null,
                'provider_token'        => null,
                'role'                  => 'admin',
                'status'                => 'active',
                'remember_token'        => null,
                'created_at'            => '2025-01-05 04:06:22',
                'updated_at'            => '2025-01-05 10:07:59',
                'deleted_at'            => null,
            ],
            [
                'id'                    => 2,
                'name'                  => 'user',
                'email'                 => 'user@gmail.com',
                'email_verified_at'     => null,
                'password'              => Hash::make('12345678'),
                'avatar'                => null,
                'number'                => null,
                'address'               => null,
                'gender'                => 'male',
                'dob'                   => null,
                'provider'              => null,
                'provider_id'           => null,
                'provider_token'        => null,
                'role'                  => 'user',
                'status'                => 'active',
                'remember_token'        => null,
                'created_at'            => '2025-01-05 04:06:22',
                'updated_at'            => '2025-01-05 10:07:59',
                'deleted_at'            => null,
            ],
        ]);
    }
}
