<?php
$showerer = false;
$showalert = false;
$showexist = false;
//if (isset ($_POST["username"])){

if($_SERVER["REQUEST_METHOD"] == "POST" ){

  include 'partials/_dbconnect.php';
 $username = $_POST['username'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 
// $sql = "Select * from users12 where username=''";
 
 $exitssql = "Select * from users12 where username='$username'";
 $resul = mysqli_query($conn, $exitssql);
  if($resul){
  $showexist = true;
  $showalert=false;
  
    //  if($username == ""){
      // echo "use a user name";
    //  }


 if ($password == $cpassword){
   $sql = "INSERT INTO `users12` (`username`, `password`) VALUES ('$username', '$password')";
   $result = mysqli_query($conn, $sql);       
   $showexist = false;
   

   
   
   if($result){
        $showalert=true;
                  }
    
  
  
   if($conn->query($sql) == true){
    
   // echo "successfully connectedwsasd";
      }
      else
      {
  //      echo "ERROR:$sql <br> $conn->error";
      }
    
      }
    else{
      $showerer = true;
    }  
  } 
    $conn->close();
   }
  
    
  //else {
   // $showerer = true;
  //}
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <style>
     body {
 // background-image: url("./img/img40.jpg");
 // background-repeat: no-repeat;
 // background-size: cover;
      }
   </style>
    <title>Hello, world!</title>
  </head>
   <body >
   
  <?php
      
      require 'partials/_nav.php';
      
  ?>
    <p class="fw-bold fs-3 text-warning my-4 text-center">CREATE YOUR ACCOUNT</p>
          
  <div class="container my-4">
  <?php
    
   if($showalert) {  echo
  '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>YOUR ACCOUNT HAS BEEN SUCCESSFULLY CREATED
  </div>
</div>';
      }
      if($showerer) {  echo
        '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>your password does not match
        </div>
      </div>';
            }
  
            if($showexist) {  echo
              '<div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <div>user name is exist please choose another user name 
              </div>
            </div>';
                  }
        
   
   
   ?>

<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  
    
    <form  action="signup.php" method="post" class="row g-3" >
  
  
  <div class="col">
    <label class="form-label">User Name</label>
  <input name= "username"   type="text" class="form-control" placeholder="Enter a username" aria-label="Name" Required>
</div>


    <div class="col2">
      <label for="inputEmail4" class="form-label">password</label>
      <input type="password"  name="password" class="form-control" id="inputEmail4" placeholder="Enter your password" Required>
    </div>

    <div class="col2">
      <label for="inputEmail4" class="form-label"> confirm password</label>
      <input type="password"  name="cpassword" class="form-control" id="inputEmail4" placeholder="Enter your password" Required>
    </div>

    <div class="col3">
          <button name="submit" type="submit" class="btn btn-primary">signup now</button>
        </div>

    </form>  
  </div>



  <?php require 'partials/_footer.php' ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>