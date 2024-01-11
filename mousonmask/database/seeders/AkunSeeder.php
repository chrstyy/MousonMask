<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'callista',
                'name'=>'Callista',
                'email'=>'callista@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],

            [
                'username'=>'christy',
                'name'=>'Christy',
                'email'=>'christy@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'jennifer',
                'name'=>'Jennifer',
                'email'=>'jennifer@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'user',
                'name'=>'User',
                'email'=>'user@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}