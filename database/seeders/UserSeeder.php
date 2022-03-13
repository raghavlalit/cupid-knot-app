<?php

namespace Database\Seeders;

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
        $user = User::create([
            'first_name' => 'Happy',
            'last_name' => 'Singh',
            'email' => 'happysingh@gamil.com',
            'password' => Hash::make('12345678'),
            'birthday' => '2022-03-12',
            'gender' => 'male',
            'phone' => '9876543210',
            'income' => '1500000',
            'occupation' => 'government',
            'family_type' => 'nuclear',
            'manglik' => 'no',
            'p_income' => '1000000',
            'p_occupation' => ['private'],
            'p_family_type' => ['joint'],
            'p_manglik' => 'no',
        ]);
    }
}
