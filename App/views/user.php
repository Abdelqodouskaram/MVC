<?php
use App\Controllers\UserController;
echo "WELCOME TO USERS PAGE <br>";

$user= new UserController();
$user->setInfo("Abdo",24);
$user->getName();
$user->getAge();