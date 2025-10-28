<?php

namespace Database\Seeders;

use App\Enums\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name'=>'user',
            'email'=>'user@email.com',
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name'=>'vendor',
            'email'=>'vendor@email.com',
        ])->assignRole(RolesEnum::Vendor->value);

        User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@email.com',
        ])->assignRole(RolesEnum::Admin->value);
    }
}
