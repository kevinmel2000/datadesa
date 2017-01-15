<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat sample admin
        $admin = new User();
        $admin->name = 'prianthon';
        $admin->email = 'info@prianthon.id';
        $admin->password = bcrypt('merdeka1945');
        $admin->save();
    }
}
