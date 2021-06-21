<?php
error_reporting(0);
namespace App\Router;
use App\Controllers\PostsController;
use App\Controllers\UserController;

$request = $_SERVER['PATH_INFO'];
switch($request){
    case '':
        require_once __DIR__.'/views/index.php';
        break;
    case '/posts':
        $posts=new PostsController();
        break;
    case '/users':
        $users=new UserController();
        break;
    default:  
        echo "PAGE NOT FOUND";          
        break;    
} 