<?php

use Illuminate\Database\Seeder;

use Akagari\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cell_id'		=>	1,
            'first_name'	=>	'System',
            'last_name'		=>	'Administrator',
            'email'			=>	'admin@akagari.gov.rw',
            'phone_number'	=>	'0786649962',
            'user_type'		=>	'sysadmin',
            'password'		=>	Hash::make('admin')
		]);
    }
}
