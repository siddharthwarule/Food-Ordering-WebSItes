<?php
 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ){


  header("location: login.php");
  exit();
  } 


  if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";

  $con = mysqli_connect($server, $username, $password);
  

  if(!$con){
      die("connection field".mysqli_connect_error());   
  }
 $name = $_POST['name'];
 $phoneno = $_POST['phoneno'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $order = $_POST['order'];


  $sql="INSERT INTO `orderdata1`.`detailsform` (`name`, `phone_no`, `email`, `address`, `order1`, `date-time`)
   VALUES ( '$name', '$phoneno', '$email', '$address','$order',current_timestamp());";
  
 // echo $sql;

  if($con->query($sql) == true){
    
// echo "successfully connected";
  }
  else
{
  echo "ERROR:$sql <br> $con->error";
}
  $con->close();
}
?>







<!doctype html> 
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="sid.css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1120px)" href="sid.css/s.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The sid's online kitchen
    </title>
</head>
<body>
  <section id="position">
<nav class="navbar backGround">
     <u1 class="nav-list">
     

     
       <li><a href="./welcome.php">Home</a> </li>
       <li> <a href="./servise.html">Services</a></li>
       <li> <a href="./contact.html">Contact</a></li>
       <li> <a href="./about.html">About</a></li>
       <li> <a href="./logout.php">logout</a></li>
       <li> <a href="./admin_login.php">Admin login</a></li>
      </u1>

     <div class="rightNav">
         <!-- <input type="text" name="search" id="search">
         <button class="btn btn-sm">search</button>
     </div>
     -->
</nav>
  </section>
<section id="home"class="background">
 
 
  <h1  class="h12">Welcome <?php echo $_SESSION['username'] ?> to,</h1> <br> <h1 class="h12"> Sid's online kitchen </h1>
    <p class="text">

The primary purpose of hotels is to provide 
travelers with shelter, food, refreshment, and similar services and goods
    </p>
    <p class="text"> 
        
    </p>
    <button class="btns"> <a href="#order">Order now</a></button>
</section>
 
 
 <section id="option1">
    

  <h1 class="h4">our menu</h1>       
     <ul class="optionlist">
    
             
         <li class="snacks"><a href=".\snacks.html">SNACKS
             <img src=".\img\img30.jpg" alt="img"></a>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
         
     </li>
     <li class="snacks"><a href=".\chineese.html">CHINEESE
      <img src=".\img\img25.jpg" alt="img"></a>
     Lorem ipsum dolor sit amet consectetur adipisicing elit.
</li>

<li class="snacks"><a href=".\southindian.html">SOUTH INDIAN
  <img src=".\img\img26.jpg" alt="img"></a>
 Lorem ipsum dolor sit amet consectetur adipisicing elit.
</li>
         
<li class="snacks"><a href=".\main-cource.html">MAIN COURCE
  <img src=".\img\img27.jpg" alt="img"></a>
 Lorem ipsum dolor sit amet consectetur adipisicing elit.

</li>

      </ul>
 
 </section>
 <!-- <section id="services" class="services">
<li>
  <div class="openclass">
      <h1 class="h13">our services</h1>
  
      <div class="box">
          <div class="boxn"><ul class="space">
             <h1 class="h5">
                  <img src=".\img\img20.jpg" alt="img">
                     <h1>food catering</h1>
                  ipsum dolor sit amet 
                 as the waril adipisicing elit. Officia qui quod voluptatum iure.
               </h1>
      </div>
      
          <div class="boxn bg"><u1 class="space">
              <h1 class="h5">      
                <div class="img-size">   <img src=".\img\img5.jpg" alt="img"></div>
                   <h1>Bulk Ordering</h1>
       ipsum dolor sit amet consectetur 
           adipisicing elit. Corporis repellat iusto.</h1></u1>
          </div>
           
          <div class="boxn">
                               <u1 class="space">
               
            <a href="#order">     <h1 class="h5"></h1>    
                   <img src= ".\img\img9.jpg" alt="img"></a>
                   <h1>Home Deleveryng</h1> 
               locale  xvdvvdv scc saxasdaf sxasxx xsadgfg dffgg </h1></u1>
    </div>
      </div>
  </div>
</li>

 </section> -->
   
  <section class="orderform" id="order">
    <h1 class="h14">MAKE YOUR ORDER</h1>
  
    
      <form  action="index.php" method="post" class="row g-3" >
  
  
      <div class="col">
        <label class="form-label">Name</label>
      <input name= "name"  type="text" class="form-control" placeholder="Enter your full name" aria-label="Name" Required>
    </div>
  

        <div class="col2">
          <label for="inputEmail4" class="form-label">Phone No</label>
          <input type="number" name="phoneno" class="form-control" id="inputEmail4" placeholder="Enter your Phone No" Required>
        </div>

        <div class="col2">
          <label for="inputAddress" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Enter your Email" Required>
        </div>
          
        <div class="col2">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Enter your Address" Required>
        </div>
      
        <div class="col2">
          <label for="inputAddress" class="form-label">Order</label>
          <input type="text" name="order" class="form-control" id="inputAddress" placeholder="Enter your order" Required>
        </div>
      

        <div class="col3">
          <button name="submit" type="submit" class="btn btn-primary">ORDER NOW</button>
        </div>
      </form>
         </section>
      
         <?php require 'partials/_footer.php' ?>
       
        </body>



</html>
  
