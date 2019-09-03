<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <?php include'head.php';?>
  </head>
  <body class="fadeInUp">
    <main class="loginform flipOutX">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-8 mx-auto formwrapperregister">

            <form class="" action="back.php" method="post" enctype="multipart/form-data">
              <h1 class="formheading mb-3 mt-0 text-center">REGISTER !!</h1>
              <div class="mx-3">
                <label class="formheading fontsize">Enter your Name:</label>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name='fname' id="" placeholder="First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name='lname' id="" placeholder="Last Name">
                  </div>
                </div>
              </div>
              <div class="form-group col-lg-6">
                <label class="formheading fontsize" for="inputusername">Username:</label>
                <input type="email" class="form-control" name='reg_username' id="inputusername" placeholder="ex. shaaitaan@gmail.com ">
              </div>
              <div class="form-group col-lg-6">
                <label class="formheading fontsize" for="inputpassword">Password:</label>
                <input type="password" class="form-control" id="inputpassword" placeholder="Password" name='reg_password'>
              </div>
              <div class="form-group col-lg-12 my-4">
                <label class="formheading fontsize mr-3">Select Image to Upload:</label>
                <input class="formheading btn btn-light mx-4" type="file" name="img" id="fileToUpload">
                <!--    <input class="btn btn-primary mx-4" type="submit" value="Upload Image" name="submit">-->
              </div>
              <div class="mx-3 text-center">
                <button type="submit" class=" fontsize btn btn-primary mt-3 mb-3" name='register'>Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <?php include'script.php';?>
  </body>
</html>
