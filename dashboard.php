<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:index.php");
}
else{

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <?php include'head.php';?>
  </head>
  <body >

    <main class=" dashboard flipOutX">
        <?php include 'navbar.php'; ?>
<div class="container m-5">

       <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <span class="">ADD</span>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

<section>
    <form class="" action="back.php" method="post" >
  <div class="form-group">

  <div class="form-group">
   <div class="form-group">
       <label for="exampleInputWebField">Enter Website Name </label>
    <input type="text" class="form-control" id="exampleInputWeb" aria-describedby="emailHelp" placeholder="Enter Website Name"name="web_name">
   </div>

    <label for="exampleInputEmail1">Enter Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password" placeholder="Password">
  </div>

  <button type="submit"name="add" class="btn btn-primary">ADD</button>

 </div>
</form>
</section>


      </div>
    </div>
  </div>
    </div>

        </div>


<section class="userdata">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Website Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

<?php

      include'config.php';
      $query="SELECT * from `userdata` WHERE `user_id`=? ";
       $stmt=$connection->prepare($query);

    $stmt->execute([$_SESSION['user_id']]);
       $posts = $stmt->fetchAll();
       foreach ($posts as $row) { ?>
<tr>
    <td> <?php echo $row['site_name']; ?></td>
            <td><?php echo $row['site_username']; ?></td>
            <td><?php echo $row['site_password']; ?></td>
            <td><a href="formupdate.php?q=<?php echo $row['sr']; ?>"name="update" class="btn btn-success">Update</a></td>
            <td><a href="back.php?q=<?php echo $row['sr']; ?>" name="delete" class="btn btn-danger">Delete</a></td>
</tr>

    <?php } ?>

  </tbody>
</table>



</section>





    </main>
    <?php include'script.php';?>
  </body>
</html>

<?php

}

 ?>
