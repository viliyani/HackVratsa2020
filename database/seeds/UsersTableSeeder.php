<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Administrator';
        $user->email  = 'administrator@app.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->roles()->attach([1, 2, 3]);

        factory(App\User::class, 20)->create()->each(function ($user) {
            $user->roles()->attach(rand(1, 2));
        });
    }
}