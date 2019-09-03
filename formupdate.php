
<?php
        session_start();
        if(!isset($_SESSION['user_id'])){
            header("Location:index.php");
        }
        $con = mysqli_connect("localhost", "root", "", "assignment");
        $user_id = $_GET['q'];
        $q2 = "SELECT * FROM `userdata` WHERE `sr` = '$user_id'";
        $res = mysqli_query($con, $q2);
        $row = mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
    <?php include 'head.php'?>

</head>
<body class="myform">
   <section>
    <form class="myupdate"style="margin-top: 100px;margin-left:200px;margin-right:50px;" action="back.php" method="post" >
  <div class="form-group">

    <div class="form-group">
       <label for="exampleInputWebField">Enter Website Name </label>
    <input type="text" class="form-control" id="exampleInputWeb" aria-describedby="emailHelp" value="<?php echo $row['site_name']; ?>" name="web_name">
   </div>
   <div class="form-group">
     <label for="exampleInputEmail1">Enter Username</label>
     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['site_username']; ?>" name="username">
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Enter New Password</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="updated_password" placeholder="Password" value="<?php echo $row['site_password']; ?>">
   </div>

  <input type="hidden" value="<?php echo $row['sr']; ?>" name="sr">

  <button type="submit"name="update" class="btn btn-primary mybutton">Update</button>

 </div>
</form>
</section>

    <?php include 'script.php'?>
</body>
</html>
