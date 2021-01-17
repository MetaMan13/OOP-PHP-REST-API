<?php
    declare(strict_types=1);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('Access-Control-Allow-Origin: *');
        if(isset($_POST['c'], $_POST['t'], $_POST['b'], $_POST['cr']))
        {
            include './Classes/Post.class.php';
            $category = (int)$_POST['c'];
            $title = (string)$_POST['t'];
            $body = (string)$_POST['b'];
            $creator = (int)$_POST['cr'];
            $obj = new Post();
            $obj->createPost($category, $title, $body, $creator);
        }
    }