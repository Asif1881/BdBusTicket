<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'role_id' => '1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin111'),
            ],
        ]);
    }
}
