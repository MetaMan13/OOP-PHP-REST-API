<?php
    declare(strict_types=1);
    
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        header('Access-Control-Allow-Origin: *');
        if(isset($_GET['amount']))
        {
            $amount = (int)$_GET['amount'];
            include './Classes/Post.class.php';
            $obj = new Post();
            $obj->getPosts($amount);
        }
    }