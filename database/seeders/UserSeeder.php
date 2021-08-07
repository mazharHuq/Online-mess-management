<?php

namespace Database\Seeders;

use App\Models\User;
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
        if (is_null(User::where('email', 'thanvi@gmail.com')->first())) {
            $user = new User();
            $user->name = "Thanvi";
            $user->email = "thanvi@gmail.com";
            $user->password = Hash::make('thanvi');
            $user->save();
        }
    }
}
