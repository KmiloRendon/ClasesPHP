<?php
require_once('User.php');
require_once('Connect.php');

$connect = new Connect;
$connect->init();
echo '<br><br>';

$id = random_int(1,1000);
$user = new User ($id);
/*
$user->setName('Pepe');
$user->setLastName('Perez');

var_dump($user);
echo '<br><br>';
var_dump ($user->getFullName());
*/
//$user->id = 10;
$user->email = 'camilo.rendon08@gmail.com';
$userByEmail = $user->getByEmail($user->email);
foreach ($userByEmail as $key =>$value){
    var_dump($key);
    var_dump($value);
}
var_dump($userByEmail);
?>