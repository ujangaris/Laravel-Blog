<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.test',
            'password' => bcrypt('admin0k8'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id'   => $user->id,
            'avatar'  => 'uploads/avatars/avatar1.png',
            'about'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor beatae modi iusto animi! Nisi',
            'facebook'  => 'facebook.com',
            'youtube'   => 'youtube.com'
        ]);

    }
}
