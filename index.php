<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <?php include'head.php';?>
  </head>
  <body >

   <?php
      if(isset($_GET['q'])){
          if($_GET['q']==1){
            echo "Please Enter Valid Credientials";
          }
      }
      ?>


    <main class="loginform">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto formwrapper">
            <form class="text-center" method="post" action="back.php">
              <h1 class="formheading mb-3 mt-0">LOGIN !!</h1>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              </div>
              <div class="mx-auto">
                <button type="submit" name='submit' class="btn btn-primary mr-5">SUBMIT</button>
                <a class="btn btn-primary" href="register.php">REGISTER</a>
              </div>
            </form>
            <!--
              <button class="btn btn-primary" action="register.php">REGISTER</button>
                   </div>
              -->
          </div>
        </div>
      </div>
    </main>
    <?php include'script.php';?>
  </body>
</html>
