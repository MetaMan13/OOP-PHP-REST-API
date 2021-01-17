<?php
    declare(strict_types=1);
    include './Classes/Post.class.php';

    header('Access-Control-Allow-Origin: *');

    try{
        $test = new Post();

        // POST

        // PUT
        // $test->updatePostCategory(18,3);
        // $test->updatePostTitle(10,"Updated with strict types");
        // $test->updatePostBody(10,"Changed with strict types");

        // DELETE
        // $test->deleteSinglePost(4);
        unset($test);
        exit();
    }catch (Exception $e){
        echo "Exeption: " . $e->getMessage();
    }