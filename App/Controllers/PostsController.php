<?php
namespace App\Controllers;

use App\Models\model;

class PostsController{
    public $postId;

    function __construct()
    {
        $data['name'] = 'DONE';
        return $this->view('post',$data);
    }

    public function addPostId($id){
        $post=new model();
        $this->postId=$id;
    }    
    public function getPostId(){
        return $this->postId;
    }

}