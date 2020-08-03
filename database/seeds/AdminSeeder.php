<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User(
            [
                'name' =>'Admin',
                'email' => 'admin@root.at',
                'email_verified_at' => now(),
                'rolle' => 'admin',
                'password' => Hash::make('admin1234'),
                'remember_token' => Str::random(10)
            ]
        );
        $admin->save();
    }
}
