<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder {

	public function run()
	{

		/*\App\User::create([
			'name' => 'Admin User',
			//'username' => 'admin_user',
			'email' => 'admin@admin.com',
			'password' => bcrypt('admin'),
			'confirmed' => 1,
            'admin' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);*/

		\App\User::create([
			'name' => 'Asif shareef',
			//'username' => 'test_user',
			'email' => 'Asif@Asif.com',
			'status' => 'j',
			'password' => bcrypt('asif'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Saad Rafique',
			//'username' => 'test_user',
			'email' => 'saad@saad .com',
			'status' => 'e',
			'password' => bcrypt('saad'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Ali Haider',
			//'username' => 'test_user',
			'email' => 'ali@ali.com',
			'status' => 'j',
			'password' => bcrypt('ali'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Ali Raza',
			//'username' => 'test_user',
			'email' => 'raza@raza.com',
			'status' => 'j',
			'password' => bcrypt('raza'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Sehar Naz',
			//'username' => 'test_user',
			'email' => 'sehar@sehar.com',
			'status' => 'j',
			'password' => bcrypt('sehar'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Tahira Zafar',
			//'username' => 'test_user',
			'email' => 'tahira@tahira.com',
			'status' => 'j',
			'password' => bcrypt('tahira'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);
        \App\User::create([
			'name' => 'Sabaht Ali',
			//'username' => 'test_user',
			'email' => 'sabahat@sabahat.com',
			'status' => 'j',
			'password' => bcrypt('sabahat'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);
        \App\User::create([
			'name' => 'Shakeela Ali Raza',
			//'username' => 'test_user',
			'email' => 'shakeelalove@aliraza.com',
			'status' => 'e',
			'password' => bcrypt('shakeelalovesaliraza'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);



	}

}
