<?php



// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ){


//   header("location: login.php");
//   exit();
//   } 


  if($_SERVER["REQUEST_METHOD"]=="POST"){



    echo "<script> alert(' Your details are saved please wait for delevery!...');
    
  //   </script>";

    if(isset($_POST["ordersubmit"])){
      
      echo "<script> alert(' Your order has been plased!.delevering within few minutes.THANKS FOR ORDERING!...')";
    
  }
  }

  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  $named=$_POST['Item_name'];
  $price=$_POST['price'];

  }

  
  
  // echo  $named;
//  echo  $price;

$server = "localhost"; 
$username = "root";
$password = "";
$database = "orderdata1";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn){
  echo "connection success";
}
else{
    echo  mysqli_connect_error;
}


$name = $_POST['name1'];
$phoneno = $_POST['phoneno1'];
$email = $_POST['email1'];
$address = $_POST['address1'];
$order = $_POST['order1'];
// echo $name;
// echo $phoneno;
// echo $email;
// echo $address;
// echo $order;
// echo  $order;
// echo  $price;


$sql = "INSERT INTO details (`name`, `phone_no`, `email`, `order1`, `date-time`, `address`, `price`)
   VALUES( '$name', '$phoneno', '$email','$named',current_timestamp(),'$address','$price');";
  
  // INSERT INTO `detailsforms` (`srno`, `name`, `phone_no`, `email`, `order1`, `date-time`, `address`, `price`) VALUES (NULL, 'sid', '12121', 'asd@gmail.com', 'pizza', current_timestamp(), 'asasdsa', '200');
 // echo $sql;

  // if($con->($sql) == true){
    
// echo "successfully connected";
  // }
  // else
// {
  // echo "ERROR:$sql <br> $con->error";
// }
  // $con->close();

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <title>Hello, world!</title> -->
  </head>
  <body>
    <h1>your imformation has been saved go back and make an order please!...</h1>

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

