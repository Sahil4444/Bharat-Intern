<?php 
    $servername = "localhost";
    $username = "root";
   $password = "";
      $dbname = "users";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
      }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Project List</title>
  </head>
  <body>
    <link rel="stylesheet" href="navstyle.css">

    <!--Box Icon link-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo_content">
        <div class="logo">
          <i class='bx bx-tachometer' ></i>
          <div class="logo_name">Dashboard</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav_list" style="list-style: none;">
        <li>
          <a href="/log_in_page/homepage.php"><i class='bx bx-home-alt-2' ></i>
            <span class="links_name">Home</span>
          </a>
          <!--span class="toolkit">Create Project</span-->
        </li>
        <li>
          <a href="/log_in_page/new_project.php"><i class='bx bx-plus'></i>
            <span class="links_name">Create Project</span>
          </a>
          <!--span class="toolkit">Create Project</span-->
        </li>
        <li><a href="/log_in_page/projectlist.php"><i class='bx bx-list-ul' ></i><span class="links_name">Projects</span></a>
          <!--span class="toolkit">Create Project</span-->
        </li>
      </ul>
      <div class="logout">
        <i class='bx bx-log-out' ></i>
      </div>
    </div>

    <h3 style="text-align: center; padding: 30px; font-size: 50px; background-color: blueviolet;">
      Project
      <small  style="color: white; ">List</small>
    </h3>

    
