<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
public function run()
{
$model = model('UserModel');
$model->insert([
'username' => 'Irga',
'useremail' => 'irgaputra42@gmail.com',
'userpassword' => password_hash('irga112648', PASSWORD_DEFAULT),
]);
}
}
