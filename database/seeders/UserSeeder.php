<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = 'DieWerber';
        $user->email = 'info@die-werber.ch';
        $user->password = '4ceFsTe7CJNmGH82YbT4';
        $user->save();
    }
}
