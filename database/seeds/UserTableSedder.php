<?php

use Illuminate\Database\Seeder;

class UserTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t95_users')->insert([
        	[
	            'username' 	=> 'superadmin2',
	            'password' 	=> bcrypt('12345'),
	            'level'		=> 1,
	            'created_at'=> new DateTime()
        	],
        	[
	            'username' 	=> 'admin',
	            'password' 	=> bcrypt('12345'),
	            'level'		=> 1,
	            'created_at'=> new DateTime()
        	],
        	[
	            'username' 	=> 'tri',
	            'password' 	=> bcrypt('12345'),
	            'level'		=> 1,
	            'created_at'=> new DateTime()
        	],
        	[
	            'username' 	=> 'hau',
	            'password' 	=> bcrypt('12345'),
	            'level'		=> 1,
	            'created_at'=> new DateTime()
        	]
        ]);
    }
}
