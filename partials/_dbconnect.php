
 <?php
  
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "orderdata1";



  $conn = mysqli_connect($server, $username, $password, $database);
  

  if($conn){
 // echo "connection succesfull.";
  }
  
  else{
      die("connection field".mysqli_connect_error());   
  }
  
?>

