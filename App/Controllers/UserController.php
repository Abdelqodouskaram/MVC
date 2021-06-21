<?php
namespace App\Controllers;

use App\Models\model;

class UserController{


    function __construct()
    {
        require_once __DIR__ . '/../views/user.php';
    }

    public function setInfo($name, $age)
    {
        $mod = new model();
        $this->name = $name;
        $this->age = $age;
    }
    public function getName()
    {
        echo $this->name . "<br>";
    }
    public function getAge()
    {
        echo $this->age;
    }


}