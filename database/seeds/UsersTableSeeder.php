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
        DB::table('users')->insert([
            'name' => 'admin',
           'email' => 'admin'.'@admin.com',
           'password' => bcrypt('admin'),
           'gender' => 'Male',
           'birthdate' => '1995-01-01',
           'phone' => '0826875932',
           'address' => 'KH Syahdan 104A',

        ]);
    }
}
