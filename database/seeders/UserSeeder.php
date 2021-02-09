<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->name = 'Example';
        $user->email = 'mail@example.com';
        $user->password = Hash::make('secret');
        $user->save();
    }
}
