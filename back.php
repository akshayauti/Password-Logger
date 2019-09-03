
<?php


if(isset($_POST['submit'])){
    session_start();
    include'config.php';
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $query="SELECT `user_id`,`user_name`, `password`from `admin` WHERE `user_name`=? AND `password`=?";
    //prepare
    $stmt=$connection->prepare($query);

    //execute
    $check=$stmt->execute([$email,$password]);

    //fetch
    $post = $stmt->fetch();

    echo $post;
    if($check){
        // session_start();
        $_SESSION['user_id']=$post['user_id'];
        $_SESSION['user_name']=$post['user_name'];

        // header("Location:dashboard.php");

    }else{
        header("Location:index.php?e=0");
        // echo "Better Luck next time!!";
    }


}
elseif(isset($_POST['register'])){
    include'config.php';
    $reg_usernname=$_POST['reg_username'];
    $reg_password=md5($_POST['reg_password']);
    $reg_fname=$_POST['fname'];
    $reg_lname=$_POST['lname'];
    $reg_name=$reg_fname." ".$reg_lname;

    $path = "upload/";

				//file upload code
				if ($_FILES["img"]["error"] > 0)
         {
           echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
         }
         else
         {
           $temp = explode(".", $_FILES["img"]["name"]);
           $img = round(microtime(true)) . '.' . end($temp);

           if (file_exists($path . $img))
           {
             echo $_FILES["img"]["name"] . " already exists. ";
           }
           else
           {
             $aa = move_uploaded_file($_FILES["img"]["tmp_name"], $path . $img);
             var_dump($aa);
           }
         }




    $query="INSERT INTO `admin`( `name`,`user_name`, `password`, `photo`) VALUES (?,?,?,?)";
    $stmt=$connection->prepare($query);

    //execute
    $check=$stmt->execute([$reg_name,$reg_usernname,$reg_password,$img]);
    //var_dump($target_file);
    if($check){
        // echo "shabbash";
        header("location:index.php");

    }else{
        echo "Not Inserted";
    }



//    echo $reg_name ." welcome";
}

elseif(isset($_POST['add'])){
  session_start();
    include'config.php';
    $site_name=$_POST['web_name'];
    $site_username=$_POST['username'];
    $site_pass=$_POST['password'];


    $query="INSERT INTO `userdata`( `user_id`,`site_name`,`site_username`, `site_password`) VALUES (?,?,?,?)";
    $stmt=$connection->prepare($query);

    //execute
    $check=$stmt->execute([$_SESSION['user_id'],$site_name,$site_username,$site_pass]);

    if($check){
        // echo "shabbash";
        header("Location:dashboard.php");

    }else{
    }
}

elseif(isset($_GET['q'])){
    include'config.php';

    $a = $_GET['q'];



    $query="DELETE FROM `userdata` WHERE `sr`= $a ";
    $stmt=$connection->prepare($query);

    //execute
    $check=$stmt->execute();

    if($check){
        // echo "shabbash";
        header("Location:dashboard.php");

    }else{
        echo "nksnvj";
    }
}

elseif(isset($_POST['update'])){
    include'config.php';

    $updatedsite_name=$_POST['web_name'];
    $updatedsite_user=$_POST['username'];
    $updatedsite_pass=$_POST['updated_password'];

    $sr = $_POST['sr'];



    $query="UPDATE `userdata` SET `site_password`=?, `site_name` = ?, `site_username` = ? WHERE `sr`= ?";
    $stmt=$connection->prepare($query);

    //execute
    $check=$stmt->execute([$updatedsite_pass,$updatedsite_name,$updatedsite_user,$sr]);

    if($check){
        // echo "shabbash";
        header("Location:dashboard.php");

    }else{
    }
}
else{
  //header("Location:index.php");
}


?>
