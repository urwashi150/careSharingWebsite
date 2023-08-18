<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];
              

$query = 'Select * from users where user_id='.$user_id;
               //echo $query."<br>";
               $fet_settinghandler = mysqli_query($link, $query);
        $fet_settingnum = mysqli_num_rows($fet_settinghandler);
        if($fet_settingnum>0)
        {
while($row =mysqli_fetch_assoc($fet_settinghandler)){
//echo json_encode($row)."<br>";
    $username = $row['username'];
    $email = $row['email']; 
    $picture = $row['profilepicture'];
//echo $row["username"]."<br>";
}
          
        } 
?>

<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

  <div class="container-fluid">

      <div class="navbar-header">

          <a class="navbar-brand">Car Sharing</a>
          <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

          </button>
      </div>
      <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Search</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="mainpageloggedin.php">My Trips</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#">
                    <?php
                                if(empty($picture)){
                                    echo "<div class='image_preview'  data-target='#updatepicture' data-toggle='modal'><img class='previewing2' src='profilepicture/noimage.jpg' /></div>";
                                }else{
                                    echo "<div class='image_preview' data-target='#updatepicture' data-toggle='modal'><img class='previewing2' src='$picture' /></div>";
                                }

                              ?>
                  </a>
              </li>
              <li><a href="#"><b><?php echo $username; ?></b></a></li>
            <li><a href="index.php?logout=1">Log out</a></li>
          </ul>

      </div>
  </div>

</nav>