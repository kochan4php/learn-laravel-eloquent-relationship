<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $users = collect([
            [
                'nama' => 'Deo Subarno',
                'email' => 'aprodeosubarno@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'nama' => 'Fitri Nurfadhila',
                'email' => 'fitrinurfadhila@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'nama' => 'Layla Mayrisa',
                'email' => 'laylamayrisa@gmail.com',
                'password' => Hash::make('password')
            ],
        ]);

        $users->each(fn ($user) => User::create($user));
    }
}
