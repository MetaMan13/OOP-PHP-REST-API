<?php
    declare(strict_types=1);
    include 'Database.class.php';

    class Post extends Database{
        // Methods
        public function createPost(int $post_category, string $post_title, string $post_body, int $post_creator)
        {
            if(!isset($post_category, $post_title, $post_body, $post_creator)){
                exit();
            }else{
                $data = [
                    'category' => $post_category,
                    'title' => $post_title,
                    'body' => $post_body,
                    'creator' => $post_creator
                ];
    
                try{
                    $sql = "INSERT INTO posts(`post_category`, `post_title`, `post_body`, `post_creator`) VALUES(:category, :title, :body, :creator);";
                    $stmt = $this->database_connection->prepare($sql);
                    $stmt->execute($data);
                }catch (Exception $e){
                    echo $e->getMessage();
                    exit();
                }
            }            
        }
        
        public function updatePostCategory(int $post_id, int $post_category)
        {
            if(!isset($post_id, $post_category))
            {
                exit();
            }else{
                $data = [
                    'id' => $post_id,
                    'category' => $post_category
                ];
    
                try{
                    $sql = "UPDATE posts SET post_category = :category WHERE post_id = :id LIMIT 1";
                    $stmt = $this->database_connection->prepare($sql);
                    $stmt->execute($data);
                }catch (Exception $e){
                    echo $e->getMessage();
                    exit();
                }
            }
        }

        public function updatePostTitle(int $post_id, string $post_title)
        {
            if(!isset($post_id, $post_title))
            {
                exit();
            }else{
                $data = [
                    'id' => $post_id,
                    'title' => $post_title
                ];
    
                try{
                    $sql = "UPDATE posts SET post_title = :title WHERE post_id = :id LIMIT 1";
                    $stmt = $this->database_connection->prepare($sql);
                    $stmt->execute($data);
                }catch (Exception $e){
                    echo $e->getMessage();
                    exit();
                }
            }
        }

        public function updatePostBody(int $post_id, string $post_body)
        {
            if(!isset($post_id, $post_body))
            {
                exit();
            }else{
                $data = [
                    'id' => $post_id,
                    'body' => $post_body
                ];
    
                try{
                    $sql = "UPDATE posts SET post_body = :body WHERE post_id = :id LIMIT 1";
                    $stmt = $this->database_connection->prepare($sql);
                    $stmt->execute($data);
                }catch (Exception $e){
                    echo $e->getMessage();
                    exit();
                }
            }
        }

        public function getAllPosts()
        {
            try{
                header('Conent-Type: application/json');
                $stmt = $this->database_connection->query("SELECT * FROM posts");
                $jsonData = $stmt->fetchAll();
                echo json_encode($jsonData);
            }catch (Exception $e){
                echo "Exeption: " . $e->getMessage();
                exit();
            }
        }

        public function getPosts(int $number_of_posts)
        {
            if(!isset($number_of_posts)){
                exit();
            }{
                try{
                    header('Conent-Type: application/json');
                    $stmt = $this->database_connection->prepare("SELECT * FROM posts LIMIT :number_of_posts");
                    $stmt->execute(['number_of_posts' => $number_of_posts]);
                    $jsonData = $stmt->fetchAll();
                    echo json_encode($jsonData);
                }catch (Exception $e){
                    echo "Exeption: " . $e->getMessage();
                    exit();
                }
            }
        }

        public function deleteSinglePost(int $post_id)
        {
            try{
                $stmt = $this->database_connection->prepare("DELETE FROM posts WHERE post_id = :id LIMIT 1");
                $stmt->execute(['id' => $post_id]);
            }catch (Exception $e){
                echo "Exeption: " . $e->getMessage();
                exit();
            }
        }
    }
