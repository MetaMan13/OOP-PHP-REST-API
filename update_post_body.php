<?php

    declare(strict_types=1);
    
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            header('Access-Control-Allow-Origin: *');
            if(isset($_POST['id'], $_POST['b']))
            {
                include './Classes/Post.class.php';
                $id = (int)$_POST['id'];
                $body = (string)$_POST['b'];
                $obj = new Post();
                $obj->updatePostBody($id, $body);
            }
        }
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }