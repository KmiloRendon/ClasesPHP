<?php
require_once('User.php');

$id = random_int(1,1000);
$user = new User ($id);

$user->setName('Pepe');
$user->setLastName('Perez');

var_dump($user);
echo '<br><br>';
var_dump ($user->getFullName());

?>