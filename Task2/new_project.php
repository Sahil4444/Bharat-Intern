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

    <title>Project</title>
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
        <li><a href="projectlist.php"><i class='bx bx-list-ul' ></i><span class="links_name">Projects</span></a>
          <!--span class="toolkit">Create Project</span-->
        </li>
      </ul>
      <div class="logout">
        <i class='bx bx-log-out' ></i>
      </div>
    </div>

    <h3 style="text-align: center; padding: 30px; font-size: 50px; background-color: blueviolet;">
      Create
      <small  style="color: white; ">Project <img src="partials/projects.jpeg" class="img-thumbnail" alt="..." style="width:60px;"></small>
    </h3>


    <form action="/log_in_page/new_project.php" method="post">
      <div class="container" align="center" style="padding: 20px;">
        <div class="form-floating" style="margin-bottom: 20px;">
          <textarea class="form-control" placeholder="Enter title of project.." id="title" style="height: 100px; width: 600px; required;" name="title"></textarea>
        </div>
      <div class="drop" align="center" style="padding: 20px; margin-left:22% ;">
        <div class="form-group" style="float: left;margin-right: 20px;">
          <span class="form-label" style="font-size: 20px; margin-right: 120px;">Reason</span><br>
          <select id="reason" name="reason" style="margin-top: 1px;width: 180px; padding:5px;">
          <option value="" disabled selected hidden>Choose a reason </option>
            <option value="business" id="business">For Business</option>
            <option value="education" id="education">For Education</option>
            <option value="self" id="self">For Self</option>
            <option value="client" id="client">For Client</option>
          </select>
        </div>
        <div class="form-group" style="float: left; margin-right: 20px">
          <span class="form-label" style="font-size: 20px;margin-right: 140px;">Type</span><br>
          <select id="type" name="type" style="margin-top: 1px;width: 180px; padding:5px;">
             <option value="" disabled selected hidden>Choose a type </option>
            <option value="internal" id="internal">Internal</option>
            <option value="external" id="external">External</option>
            <option value="private" id="private">Private</option>
            <option value="protected" id="protected">Protected</option>
          </select>
        </div>
        <div class="form-group" style="float: left; margin-right: 20px">
          <span class="form-label" style="font-size: 20px; margin-right: 120px;">Division</span><br>
          <select id="division" name="division" style="margin-top: 1px;width: 180px; padding:5px;">
            <option value="" disabled selected hidden>Choose a division </option>
            <option value="filter" id="filter">Filters</option>
            <option value="ac" id="ac">Air conditionors</option>
            <option value="software" id="software">Sofwares</option>
            <option value="automobile" id="automobile">Automobiles</option>
          </select>
        </div>  
        <div class="form-group" style="float: left; margin-right: 20px; clear: left;margin-bottom: 20px;">
          <span class="form-label" style="font-size: 20px;margin-right: 105px;">Category</span><br>
          <select id="category" name="category" style="margin-top: 1px;width: 180px; padding:5px;">
            <option value="" disabled selected hidden>Choose a category </option>
            <option value="a" id="a">Quality A</option>
            <option value="b" id="b">Quality B</option>
            <option value="c" id="c">Quality C</option>
          </select>
        </div>
        <div class="form-group" style="float: left; margin-right: 20px;margin-bottom: 20px;">
          <span class="form-label" style="font-size: 20px;margin-right: 120px;">Priority</span><br>
          <select id="priority" name="priority" style="margin-top: 1px;width: 180px; padding:5px;">
            <option value="" disabled selected hidden>Choose a priority </option>
            <option value="high" id="high">High</option>
            <option value="medium" id="medium">Medium</option>
            <option value="low" id="low">Low</option>
          </select>
        </div>
        <div class="form-group" style="float: left; margin-right: 20px;margin-bottom: 20px;">
          <span class="form-label" style="font-size: 20px;margin-right: 80px;">Department</span><br>
          <select id="department" name="department" style="margin-top: 1px;width: 180px; padding:5px;">
            <option value="" disabled selected hidden>Choose a department </option>
            <option value="analysis" id="analysis">Analysis</option>
            <option value="technical" id="technical">Technical</option>
            <option value="engineer" id="engineer">Engineer</option>
            <option value="designer" id="designer">Designer</option>
          </select>
        </div>
        <div class="form-group" style="clear:left;float: left;margin-right: 20px; font-weight: lighter;">
            <span class="form-label" style="font-size: 15px;margin-right: 120px;">Start Date:</span><br>
            <input type="date" id="start_date" name="start_date" style="padding:5px;border-radius: 8px;width: 180px;">
        </div>
        <div class="form-group" style="float: left;margin-right: 20px; font-weight: lighter;">
            <span class="form-label" style="font-size: 15px;margin-right: 120px;">End Date:</span><br>
            <input type="date" id="end_date" name="end_date" style="padding:5px;border-radius: 8px;width: 180px;">
        </div>
        <div class="form-group" style="float: left; margin-right: 20px;margin-bottom: 20px;">
          <span class="form-label" style="font-size: 20px;margin-right: 120px;">Location</span><br>
          <select id="location" name="location" style="margin-top: 1px;width: 180px; padding:5px;">
            <option value="analysis" id="analysis">Pune</option>
            <option value="technical" id="technical">Mumbai</option>
            <option value="engineer" id="engineer">Nagpur</option>
            <option value="designer" id="designer">Nashik</option>
          </select>
        </div>
      </div>
      <div class="lastgroup" style="clear: left; float:center;">
        <label>Status :</label><input type="text"  name="status"  value = " Registered" disabled style="margin-left: 10px;width:85px;"><br/>
        <button type="submit"  name="submit" style="padding:7px;width: 120px; border-radius:8px;margin-top: 20px;background-color: blue; color: #fff; border: 1px white;"> Register</button>
      </div>
    </form>
    <?php

    $showError = "All fields are necessary";
      if ($_SERVER['REQUEST_METHOD']=='POST') {
        if(!empty($_POST['title']) && !empty($_POST['reason']) && !empty($_POST['type']) && !empty($_POST['division'])&& !empty($_POST['category'])&& !empty($_POST['priority'])&& !empty($_POST['department'])&& !empty($_POST['start_date'])&& !empty($_POST['end_date'])&& !empty($_POST['location'])) {  
          $title=$_POST['title'];  
          $reason=$_POST['reason'];
          $type=$_POST['type'];
          $division=$_POST['division'];
          $category=$_POST['category'];
          $priority=$_POST['priority'];
          $department=$_POST['department'];
          $start_date=$_POST['start_date'];
          $end_date=$_POST['end_date'];
          $location=$_POST['location'];

        $sql = "INSERT INTO `projects` (`title`, `reason`, `type`, `division`, `category`, `priority`, `department`, `start_date`, `end_date`, `location`) VALUES ('$title', '$reason', '$type', '$division', '$category', '$priority', '$department', '$start_date', '$end_date', '$location')";

        $result = mysqli_query($conn, $sql);
        if($result){
          echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:500px;margin-top: 20px;">
                  <strong>Project Saved Successfully</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div> ';
        }
        else{
          echo "error";
        }
      }
        else{
         echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:500px;margin-top: 20px;">
                  <strong>Error!</strong>' .$showError.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div> ';
        }
      }
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>