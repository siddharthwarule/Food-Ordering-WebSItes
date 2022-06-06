<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./stylesheet/style2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'partials/_header.php' ?>
  
<div class="alignment">
<form action="" method="POST"> 
<div class="row">
<h1>  Add Admin </h1>   </br>
    <div class="col">
<h4>  Full Name </h4>  <input type="text" name="full_name" class="" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
   
  
 <h4> User Name </h4>  <input type="text" name="user_name"  class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col">
   
<h4> Password </h4> <input type="password" name="password" class="form-control" placeholder="password" aria-label="Last name">
</div>
</br>
<input class="btn-primery" name="submit" type="submit" value="Submit">

    </form>

</div>


</body>
</html>

<?php
if(isset($_POST['submit'])){
    // echo "clicked";
 $full_name = $_POST['full_name'];
  $username = $_POST['user_name'];
  $password = md5($_POST['password']);
 //sql query
 $sql = "INSERT INTO  tbl_admin SET
 full_name = '$full_name',
 username  = '$username',
 password =  '$password'
 ";
//   echo $sql;

  $conn = mysqli_connect('localhost','root',"") or die(mysqli_error());
    $db_select=mysqli_select_db($conn,'weborder')or die(mysqli_error());
  


 $res = mysqli_query($conn,$sql) or die(mysqli_error()); 
  

}


?>





