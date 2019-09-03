<nav class="navbar navbar-light mynav">
  <!-- <a class="navbar-brand mynavbrand" href="#">DASHBOARD></a> -->
  <a class="navbar-brand"style="color:White;"><?php
  $con = mysqli_connect("localhost", "root", "", "assignment");
  $user_id = $_SESSION['user_id'];
  $q2 = "SELECT * FROM `admin` WHERE `user_id` = '$user_id'";
  $res = mysqli_query($con, $q2);
  $row = mysqli_fetch_array($res);
  echo "Welcome ".$row['name'];
  ?> </a>


     <?php
        $con = mysqli_connect("localhost", "root", "", "assignment");
        $user_id = $_SESSION['user_id'];
        $q2 = "SELECT * FROM `admin` WHERE `user_id` = '$user_id'";
        $res = mysqli_query($con, $q2);
        $row = mysqli_fetch_array($res);

      ?>
      <img class="navbar-nav navimage"src="upload/<?php echo $row['photo']; ?>" style="width: 10%; height:10%;">

  <a class="navbar-brand logout btn btn-outline-warning navbar-right" href="logout.php">LOGOUT</a>

<!--     <button class="btn btn-outline-warning mt-4"  type="submit">Logout</button>
 -->
</nav>
