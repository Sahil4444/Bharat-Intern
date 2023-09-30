<?php
    include('./dbcon.php');
    function getproducts(){
        global $conn;
        $select_query = "select * from `blog` order by `date` desc";
        $result_query = mysqli_query($conn, $select_query);
        
        while($row = mysqli_fetch_assoc($result_query)){
            $id = $row['id'];
            $title = $row['title'];
            $author = $row['author'];
            $thumbnail = $row['thumbnail'];
            $blogimg = $row['image'];
            $content = $row['content'];
            echo "
                <div class='container blog-info bg-dark rounded'>
                    <h3 class='blog-title'>$title</h3>
                    <div class='thumbnail' style='height: 600px;'>
                        <img src='assets/product_images/$thumbnail' alt='$thumbnail' class='rounded img-fluid' style='height: 550px; width: 900px;'>
                    </div>
                    <p class='desc'>$content</p>
                    <h6 class='author'>$author</h6>
                    <a href='blog-page.php?blog_id=$id' class='btn btn-outline-primary read-more'>Read More</a>
                </div>"
            ;
        }   
    }

    // Product_Search
    function searchproducts(){
        global $conn;
        if(isset($_GET['search_product'])){
            $search_data_value = $_GET['search_data'];
            $search_query = "select * from `blog` where `title` like '%$search_data_value%'";
            $result_query = mysqli_query($conn, $search_query);
            
            while($row = mysqli_fetch_assoc($result_query)){
                $id = $row['id'];
                $title = $row['title'];
                $author = $row['author'];
                $thumbnail = $row['thumbnail'];
                $blogimg = $row['image'];
                $content = $row['content'];
                echo "
                    <div class='container blog-info bg-dark rounded'>
                        <h3 class='blog-title'>$title</h3>
                        <div class='thumbnail' style='height: 600px;'>
                            <img src='assets/product_images/$thumbnail' alt='$thumbnail' class='rounded img-fluid' style='height: 550px; width: 900px;'>
                        </div>
                        <p class='desc'>$content</p>
                        <h6 class='author'>$author</h6>
                        <a href='blog-page.php' class='btn btn-outline-primary read-more'>Read More</a>
                    </div>"
                ;
            }  
        } 
    }

    function viewMore(){
        global $conn;
        if(isset($_GET['blog_id'])){
            $id = $_GET['blog_id'];
            $select_query = "select * from `blog` where `blog`.`id`= $id";
            $result_query = mysqli_query($conn, $select_query);
            
            while($row = mysqli_fetch_assoc($result_query)){
                $title = $row['title'];
                $author = $row['author'];
                $thumbnail = $row['thumbnail'];
                $blogimg = $row['image'];
                $content = $row['content'];
                $date = $row['date'];
                echo "
                    <div id='blog-title' class='blog'>
                        <h4>$title</h4>
                    </div>
                    <div id='blog-desc' class='blog container rounded bg-dark'>
                        <h6>Author: $author</h6>
                        <p>Posted on<span> $date</span></p>
                        <hr>
                        <div id='blog-info' class='d-flex flex-column justify-content-center'>
                            <img src='assets/product_images/$thumbnail' class='rounded blog-img mb-3' alt='...' style='max-width: 400px;'>
                            <img src='assets/product_images/$blogimg' class='rounded blog-img mb-3' alt='...' style='max-width: 400px;'>
                        </div>
                        <div id='blog-footer' class='container'>
                            <p>$content</p>
                            <a href='index.php' class='btn btn-danger'>Back</a>
                        </div>
                        <div id='comment-pannel' class='mb-3 mt-5'>
                            <label for='exampleFormControlTextarea1' class='form-label'>Write a comment </label>
                            <textarea class='form-control bg-dark' name='comment' id='exampleFormControlTextarea1' rows='4' cols='96' style='color:#fff;'></textarea>
                            <div class='d-flex flex-row-reverse'>
                                <button type='submit' class='btn btn-success mt-3' name='submit'>Share</button>
                            </div>
                        </div>

                        <div id='comments' class='mb-3 mt-3 container'>
                        <h6>Comments</h6>
                            <div id='single-comment' class='container mb-3'>
                                <h7>Author</h7>
                                <p class='mb-0'>Great Blog!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>
                                <span>Posted on: vgfhbjj</span>
                                <hr class='mt-2'>
                            </div>
                        </div>
                    </div>"
                ;
            }
        }  else{
            echo "false";
        }
    }


?>