<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!--  -->

    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        body {
            margin: 0;
        }

        #login-form {
            margin: 0%;
            padding: 20px 80px 0 80px;
            color: black;
            display: flex;
            justify-content: center;
        }

        #login-form .login-header {
            margin-bottom: 10px;
        }

        #login-form form {
            padding: 10px 50px;
            background-color: #fff;
            border-radius: 5px;
        }

        #login-form h3 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        #login-form small {
            font-size: 15px;
        }

        #login-form .content-form {
            padding: 10px;
        }

        #login-form .content-form .input-group {
            margin: 0 0 10px 0;
        }

        #login-form .content-form .input-group .input-field {
            padding: 10px 15px;
            border-radius: 5px;
            border-left: none;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            /* border: 1px solid #333333; */
        }

        #login-form form .login-page {
            text-align: center;
            margin-top: 10px;
        }

        #login-form form .login-page p {
            margin-bottom: 0;
            font-weight: 600;
        }

        #login-form form .login-page p a {
            text-decoration: none;
        }

        
        /* User-profile-img  */

        #register-profile-img{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #register-profile-img input {
            position: absolute;
            width: 200px; 
            cursor: pointer;
            top: 27%; 
            height: 100px; 
            cursor: pointer; 
            opacity: 0;
        }

        #register-profile-img .user-img-input{
            padding-left: 30px;
        }

        h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
        }

        p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 14px;
            color: #333333;
        }

        .header {
            position: relative;
            text-align: center;
            background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
            color: white;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            margin: 0;
            position: relative;
            width: 100%;
            height: 15vh;
            z-index: 1;
            margin-top: -40px;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 150px;
        }

        .content {
            position: relative;
            height: 10vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <!--Hey! This is the original version
of Simple CSS Waves-->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="title">Content Point</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Content before waves-->
        <div class="container1" id="login-form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="form" >
                <div class="login-header">
                    <h3>Create Account</h3>
                    <small>Get started with your free account</small>
                </div>
                <div class="content-form">
                    <div class="name input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control input-field" placeholder="Enter full name" name="username" aria-label="Username" aria-describedby="basic-addon1" required></p>
                    </div>
                    <div class="email_id input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" class="form-control input-field" placeholder="Email Id" name="email_id" aria-label="email_id" aria-describedby="basic-addon1" required></p>
                    </div>
                    <div class="phone_no input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                        <input type="number" class="form-control input-field" placeholder="Phone number" name="phone_no" aria-label="phone_no" aria-describedby="basic-addon1" required></p>
                    </div>
                    <div class="password input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control input-field" placeholder="Create Password" name="password" aria-label="password" aria-describedby="basic-addon1" required></p>
                    </div>
                    <div class="cpassword input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control input-field" placeholder="Repeat Password" name="cpassword" aria-label="cpassword" aria-describedby="basic-addon1" required></p>
                    </div>
                    <div class="submit" id="register-btn-div">
                        <button type="submit" id="register-btn" class="btn btn-primary submit" name="submit">Create Account</button>
                    </div>
                    <div class="login-page">
                        <p>Have an account? <span><a href="login.php">Log in</a></span></p>
                    </div>
                </div>
            </form>
        </div>
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex" id="copyright">
        <p> &#169 By Sahil Narale | 2022</p>
    </div>
    <!--Content ends-->
</body>

</html>