<?php

use Illuminate\Database\Seeder;

class tbl_admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $admins = array();
        $admins['id'] = 1;
        $admins['email'] = 'dihambouroslyn@gmail.com';
        $admins['password'] = bcrypt('passer1234');
        $admins['name'] = 'Sagesse';
        $admins['role'] = 1;
        $admins['status'] = 1;
        $admins['token'] = 'jdu5sja8dj8zifp';
        $admins['remember_token'] = null;
        $admins['image'] = 'image/user.png';

        DB::table('admins')->insert($admins);
    }
}
