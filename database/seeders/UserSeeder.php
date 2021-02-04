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
        $user->name = 'DieWerber';
        $user->email = 'info@die-werber.ch';
        $user->password = Hash::make('4ceFsTe7CJNmGH82YbT4');
        $user->save();
    }
}
