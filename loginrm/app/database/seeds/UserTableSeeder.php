<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Zyanya Coral',
			'username' => 'zyanyaco',
			'email'    => 'zyanyacmr@gmail.com',
			'password' => Hash::make('ponysaurio'),
		));
	}

}