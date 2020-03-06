<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Simon Johnson';
        $user->email = 'simon@websiteflame.com';
        $user->password = bcrypt('itbuff2121');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Neo Matrix';
        $admin->email = 'neo@websiteflame.com';
        $admin->password = bcrypt('itbuff2121');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
