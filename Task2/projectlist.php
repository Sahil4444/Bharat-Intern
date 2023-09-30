<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Project List</title>

    <style>
      td input[type=submit]{
        margin-left: 4px;
        display: inline-block;
        width: 60px;
        color: #fff;
        background-color: #405de0;
        font-weight: 400;
        padding: 5px 7px;
        border-radius: 4px;
        border: none;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
      }

       td input[type=submit]:hover{
        background-color: #7DCE13;
       }
    </style>

  </head>
  <body style="position: relative;overflow: scroll;">
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

  <div class="mainbar" style="margin: 14px 0% 40px 30%;">
    <form method = "Post" style="float:left;">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchpro" style="width:36%;float:left;">
      <button class="btn btn-outline-success" type="submit" name="search" style="float:left;margin-right: 30px; margin-left:5px;">Search</button>
      <label>Sort</label> <select name="sort" style="padding:6px 12px;border-radius: 6px;" >
      <option value=" " disabled selected hidden>Sort by</option>
      <option value="0">Ascending</option>
      <option value="1">Descending</option>
      </select>
       <button class="btn btn-outline-success " type="submit" value="submit" name="submit" style="margin-left:5px;margin-top: 0px;">Submit</button>
    </form>
    <br/>
  </div>

<?php 
    $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "users";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
             $sql = "SELECT * FROM `projects`";
            $result = mysqli_query($conn, $sql); 

?>



  <?php 
      if(isset($_POST['submit'])){
  $sort=$_POST['sort'];
if ($sort == 0){
    $query = "SELECT * FROM `projects` ORDER BY `projects`.`srno` ASC";
    $result = $conn->query($query);}
    else if($sort==1){
    $query = "SELECT * FROM `projects` ORDER BY `projects`.`srno` DESC";
    $result = $conn->query($query);}
    }

  ?>

  <?php 
    if (isset($_POST['search'])) {
      $sproname = $_POST['searchpro']; 
      $sql = "SELECT * FROM `projects` Where title = '".$sproname."' ";
      $result = mysqli_query($conn, $sql);
      if($result== true){ 
        if ($result->num_rows > 0) {
          $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
          $msg= $row;
        }
        else {
          $msg= "No Data Found"; 
        }
      }
      else{
        $msg= mysqli_error($db);
    }
  }
  ?>



 <script> 
function status(id){
     document.cookie="proid  = " +id;
} </script>
<?php 
  if(isset($_POST["Start"])||isset($_POST["Close"])||isset($_POST["Cancel"])){
   $proid =  $_COOKIE['proid'];
   if(isset($_POST["Start"])){
    $sql = "UPDATE `projects` SET `status`='Running' WHERE srno = '".$proid."' ";}
    if(isset($_POST["Close"])){
        $sql = "UPDATE `projects` SET `status`='Closed' WHERE srno = '".$proid."' ";}
     if(isset($_POST["Cancel"])){
            $sql = "UPDATE `projects` SET `status`='Cancelled' WHERE srno = '".$proid."' ";}
             $result=$conn -> query($sql); 
    echo "<meta http-equiv='refresh' content='0'>";
if($result){  
echo " Project Successfully Updated";
} else {  
echo "Failure!";  
}
 }
?>





    <!--$sql = "INSERT INTO `projects` (`title`, `reason`, `type`, `division`, `category`, `priority`, `department`, `start_date`, `end_date`, `location`) VALUES ('$title', '$reason', '$type', '$division', '$category', '$priority', '$department', '$start_date', '$end_date', '$location')";-->

   

    <div class="container vertical-scrollable" style="margin-left:20%; margin-top:10px;">
      <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
          <tr>
            <th scope="col">sr.no</th>
            <th scope="col">Project Name</th>
            <th scope="col">Reason</th>
            <th scope="col">Type</th>
            <th scope="col">Division</th>
            <th scope="col">Category</th>
            <th scope="col">Priority</th>
            <th scope="col">Department</th>
            <th scope="col">Location</th>
            <th scope="col">Current Status</th>
            <th scope="col" style="width: 25%;text-align: center;">Change Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
            ?>

            <?php
            if (mysqli_num_rows($result)>0) {
              $sno = 0;
              foreach ($result as $row) {
                $sno = $sno+1;
                ?>
                <tr>
                  <td><?php echo $sno;?></td>
                  <td style="font-weight: bolder;"><?php echo $row['title'];?><br><div style="font-size:10px;font-weight: lighter;"><?php echo $row['start_date'];?> to<br><?php echo $row['end_date'];?></div></td>

                  <td><?php echo $row['reason'];?></td>
                  <td><?php echo $row['type'];?></td>
                  <td><?php echo $row['division'];?></td>
                  <td><?php echo $row['category'];?></td>
                  <td><?php echo $row['priority'];?></td>
                  <td><?php echo $row['department'];?></td>
                  <td><?php echo $row['location'];?></td>
                  <td><?php echo $row['status'];?></td>
                  <td><form method = "Post"><input type = "submit" name = "Start" value = "Start " id = '<?php echo $row['srno'];?>' onClick = "status(this.id)"> <input type = "submit" name = "Close" value = "Close " id = '<?php echo $row['srno'];?>' onClick = "status(this.id)"> <input type = "submit" name = "Cancel" value = "Cancel " id = '<?php echo $row['srno'];?>' onClick = "status(this.id)"> </form>
              </td>
                </tr>
                <?php
              }
            }
            else{
                ?>
                <tr>
                  <td>No Records available</td>
                </tr>
                <?php
             }
                ?>
        </tbody>
      </table>
    </div>
  </div>
  </body>
</html>

<?php

?>