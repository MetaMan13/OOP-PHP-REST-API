<?php

    declare(strict_types=1);
    
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            header('Access-Control-Allow-Origin: *');
            if(isset($_POST['id']))
            {
                include './Classes/Post.class.php';
                $id = (int)$_POST['id'];
                $obj = new Post();
                $obj->deleteSinglePost($id);
            }
        }
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }