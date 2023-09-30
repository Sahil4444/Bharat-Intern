<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/createBlog.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
    include('dbcon.php');
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $author = $_SESSION['username'];
        $content = $_POST['content'];


        //images
        $thumbnail = $_FILES['thumbnailfile']['name'];
        $blogimg = $_FILES['blogfile']['name'];

        //images - tmpname
        $temp_thumbnail = $_FILES['thumbnailfile']['tmp_name'];
        $temp_blogimg = $_FILES['blogfile']['tmp_name'];

        if($title == '' or $content == '' or $thumbnail == '' or $blogimg == ''){
            echo "<script>alert('Please fill all fields!')</script>";
        }else{
            move_uploaded_file($temp_thumbnail, "assets/product_images/$thumbnail");
            move_uploaded_file($temp_blogimg, "assets/product_images/$blogimg");

            //insert query
            $insert_blog = "insert into `blog` (title, author, thumbnail, image, content, date) values ('$title', '$author', '$thumbnail', '$blogimg', '$content', NOW())";
            $result_query = mysqli_query($conn, $insert_blog);
            if($result_query){
            echo "<script>alert('Inserted Successfully!')</script>";
            }
        }
    }
    ?>


    <div id="header">
        <!-- <h3>Content Point</h3>
         -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" id="title">Content Point</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <form class="d-flex ms-auto col-5" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search blogs" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Welcome <b><?php echo $_SESSION['username']; ?></b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <hr class="m-0">
    <section id="blog-form-body" class="container-fluid bg-dark">
        <div id="create-blog-title" class="blog mb-3">
            <h4>Create Blog</h4>
        </div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="create-blog-form" class="rounded container" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Topic</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="color: black;" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Thumbnail</label><br>
                <input type="file" name="thumbnailfile" id="thumbnail-img" class="rounded form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Upload images</label><br>
                <input type="file" name="blogfile" id="blog-img" class="rounded form-control">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter your content here...</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="color: black;" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </section>
</body>
</html>