<?php

    declare(strict_types=1);
    
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            header('Access-Control-Allow-Origin: *');
            if(isset($_POST['id'], $_POST['t']))
            {
                include './Classes/Post.class.php';
                $id = (int)$_POST['id'];
                $title = (string)$_POST['t'];
                $obj = new Post();
                $obj->updatePostTitle($id, $title);
            }
        }
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }