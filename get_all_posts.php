<?php
    declare(strict_types=1);
    
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        include './Classes/Post.class.php';
        header('Access-Control-Allow-Origin: *');
        $obj = new Post();
        $obj->getAllPosts();
    }

