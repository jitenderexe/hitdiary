<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//refresh users
		DB::table('users')->truncate();
		$Users=array(						
					array(	
					'first_name'		=> 'admin',
					'last_name'			=> 'admin',
					'email'				=> 'admin@gmail.com',
					'password'			=>  Hash::make('admin'),
					'status'			=> 'active',
					'gender'			=> 'male',
					'created_at'		=>	new DateTime,
					'updated_at'		=>	new DateTime,
					),
					array(	
					'first_name'		=> 'user',
					'last_name'			=> 'user',
					'email'				=> 'user@gmail.com',
					'password'			=>  Hash::make('user'),
					'status'			=> 'active',
					'gender'			=> 'male',
					'created_at'		=>	new DateTime,
					'updated_at'		=>	new DateTime,
					)
				);									
		  DB::table('users')->insert($Users);
	}

}
