<?php
    declare(strict_types=1);
    
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            header('Access-Control-Allow-Origin: *');
            if(isset($_POST['id'], $_POST['c']))
            {
                include './Classes/Post.class.php';
                $id = (int)$_POST['id'];
                $category = (int)$_POST['c'];
                $obj = new Post();
                $obj->updatePostCategory($id, $category);
            }    
        }
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }