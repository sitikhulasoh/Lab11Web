<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'lasoohya',
		'useremail' => 'yslasooh251@gmail.com',
		'userpassword' => password_hash('akuada123', PASSWORD_DEFAULT),
		]);
	}
}
