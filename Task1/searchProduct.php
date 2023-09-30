<?php
    session_start();
?>

<!-- Fetching Products -->
<?php
    include("dbcon.php");
    $select_query = "select * from `blog`";
    $result_query = mysqli_query($conn, $select_query);
                    
    $row = mysqli_fetch_assoc($result_query);
                    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Point</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
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
                    <form class="d-flex ms-auto col-5" role="search" action="" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search blogs" aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-primary" type="submit">Search</button> -->
                        <input type="submit" value="Search" class="btn btn-outline-primary" name="search_product">
                    </form>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php
                            if(!isset($_SESSION['username'])){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php">Register</a>
                                    </li>
                                <?php
                            }else{
                                ?>
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
                                <?php
                            }
                        ?>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>

               
        <section id="blog-page">
            <div id="main-page" class="page">
                 <!-- Fetching Products -->
                 <?php
                    include('functions/common_function.php');
                    //calling function
                    searchproducts();              
                ?>




                <!-- <a href="blog-page.php">
                    <div class="container blog-info bg-dark rounded">
                        <h3 class="blog-title">Machine Learning</h3>
                        <div class="thumbnail img-fluid">
                            <img src="assets/ml.jpg" alt="thumbnail" class="rounded img-fluid">
                        </div>
                        <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi magni sint
                            ad! Nam facere tempore minima quaerat delectus fugit vitae et nobis, eius aut, sequi ipsam
                            officia magnam quos debitis aspernatur animi quasi voluptas eum. Labore ipsam deserunt ullam
                            incidunt, atque, aut doloribus cum possimus provident, eum odit aperiam non. Lorem ipsum,
                            dolor sit amet consectetur adipisicing elit. Esse incidunt eius aliquid officia ea totam
                            quas. Nemo atque reiciendis fugit iure. Eligendi doloremque fugit provident accusamus
                            necessitatibus quaerat voluptatem magnam totam? Laboriosam unde dolor esse quo. Deserunt,
                            beatae! Nesciunt, possimus tempora aliquid ipsam pariatur quod neque maxime! Minus, corrupti
                            fugiat!
                        </p>
                        <h6 class="author">-Sahil Narale</h6>
                        <button type="button" class="btn btn-outline-primary read-more">Read More</button>
                    </div>
                </a>
                <a href="blog-page.php">
                    <div class="container blog-info bg-dark rounded">
                        <h3 class="blog-title">Web Development</h3>
                        <div class="thumbnail img-fluid">
                            <img src="assets/web-dev.jpg" alt="thumbnail" class="rounded img-fluid">
                        </div>
                        <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi magni sint
                            ad! Nam facere tempore minima quaerat delectus fugit vitae et nobis, eius aut, sequi ipsam
                            officia magnam quos debitis aspernatur animi quasi voluptas eum. Labore ipsam deserunt ullam
                            incidunt, atque, aut doloribus cum possimus provident, eum odit aperiam non. Lorem ipsum,
                            dolor sit amet consectetur adipisicing elit. Esse incidunt eius aliquid officia ea totam
                            quas. Nemo atque reiciendis fugit iure. Eligendi doloremque fugit provident accusamus
                            necessitatibus quaerat voluptatem magnam totam? Laboriosam unde dolor esse quo. Deserunt,
                            beatae! Nesciunt, possimus tempora aliquid ipsam pariatur quod neque maxime! Minus, corrupti
                            fugiat!
                        </p>
                        <h6 class="author">-Sahil Narale</h6>
                        <button type="button" class="btn btn-outline-primary read-more">Read More</button>
                    </div>
                </a>
                <a href="blog-page.php">
                    <div class="container blog-info bg-dark rounded">
                        <h3 class="blog-title">Android Development</h3>
                        <div class="thumbnail img-fluid">
                            <img src="assets/android-dev.png" alt="thumbnail" class="rounded img-fluid">
                        </div>
                        <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi magni sint
                            ad! Nam facere tempore minima quaerat delectus fugit vitae et nobis, eius aut, sequi ipsam
                            officia magnam quos debitis aspernatur animi quasi voluptas eum. Labore ipsam deserunt ullam
                            incidunt, atque, aut doloribus cum possimus provident, eum odit aperiam non. Lorem ipsum,
                            dolor sit amet consectetur adipisicing elit. Esse incidunt eius aliquid officia ea totam
                            quas. Nemo atque reiciendis fugit iure. Eligendi doloremque fugit provident accusamus
                            necessitatibus quaerat voluptatem magnam totam? Laboriosam unde dolor esse quo. Deserunt,
                            beatae! Nesciunt, possimus tempora aliquid ipsam pariatur quod neque maxime! Minus, corrupti
                            fugiat!</p>
                        <h6 class="author">-Sahil Narale</h6>
                        <button type="button" class="btn btn-outline-primary read-more">Read More</button>
                    </div>
                </a> -->
            </div>
            <div id="side-page" class="page rounded">
                <div id="components" class="page rounded">
                    <h5>Blog Categories</h5>
                    <ul class="content">
                        <a href="#"><li>Artificial Intelligence</li></a>
                        <a href="#"><li>Machine Learning</li></a>
                        <a href="#"><li>Web Development</li></a>
                        <a href="#"><li>Android Development</li></a>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary mt-4"><a href="createBlog.php" style="text-decoration: none;"><i class="bi bi-pencil me-2"></i>Create Your Own Blog</a></button>
            </div>
        </section>
    </div>

    <div id="footer">
        <span>&copy Developed by Sahil Narale | 2023</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>