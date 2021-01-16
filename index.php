<?php
    declare(strict_types=1);
    include './Classes/Post.class.php';

    header('Access-Control-Allow-Origin: *');

    try{
        $test = new Post();
        // $test->createPost(2, "Inserted with PDO", "Create me",3);
        // $test->updatePostCategory(18,3);
        // $test->updatePostTitle(10,"Updated with strict types");
        // $test->updatePostBody(10,"Changed with strict types");
        // $test->getAllPosts();
        $test->getPosts(3);
        // $test->deleteSinglePost(4);
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }