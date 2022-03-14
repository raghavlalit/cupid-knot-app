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
            'first_name' => 'Hema',
            'last_name' => 'Sharma',
            'email' => 'hema.sharma@gamil.com',
            'password' => Hash::make('12345678'),
            'birthday' => '1997-03-12',
            'gender' => 'female',
            'phone' => '9876543210',
            'income' => '800000',
            'occupation' => 'private',
            'family_type' => 'nuclear',
            'manglik' => 'no',
            'p_income' => '1000000-1500000',
            'p_occupation' => ['private'],
            'p_family_type' => ['joint'],
            'p_manglik' => 'no',
        ]);
    }
}
