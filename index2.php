<?php



// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ){


//   header("location: login.php");
//   exit();
//   } 

include("header.php");


$name=$_POST['Item_name'];
$price=$_POST['price'];

echo $name;
echo $price;
?>

<section>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="sid.css/sid2.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>shopping cart</title>
  </head>
  <body>
      <div class="col-lg-12 text-center">
      <h1>MY CART</h1>

      </div>

 <div class="first">   <table class="table">
  <thead class="text-center">

  
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of food</th>
      <th scope="col">prise</th>
      <th scope="col">total</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
<?php
$id1=1;
$name1="onian pizaa";
$price1=550;

$id2=2;
$name2="italian pizza";
$price2=450;

$id3=3;
$name3="burger";
$price2=450;




$id = 0;
  while($_SERVER["REQUEST_METHOD"]=="POST"){

    $id = $id+1;
 
  echo
  '<tbody>
    <tr>
      
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td>'.$price.'</td>

      <form action="index3.php" method="POST">
      
      <input type="hidden" name="Item_name" value="'.$name.'">
      <input type="hidden" name="price" value="'.$price.'">

      
    <a href="index4.php">  <td> <button type="submit" name="ordersubmit" class="btn btn-primary"> make order <button></td></a>
      </tr> 
      </form>';
         
      


      // if($_SERVER["REQUEST_METHOD"]=="POST"){


    //  if(isset($_POST['ordersubmit'])){

        // echo "<script> alert('Comfirm Your Order');
        // window.location.href='index3.php';
        // </script>";
    //     // session_start();
    //     // $_SESSION['log'] = true;
    //     // $_SESSION['$_POST['Item_name']'] = $name1;

        
       
     


    //   }


    //   if(isset($_POST['orderremove'])){
    //     echo "<script> alert('Comfirm to remove your order!');
    //     window.location.href='cart.php';
    //     </script>";
     


    //   }

    // }

 if($name==$name){

 echo '<a href="cart.php"><button type=submit class="btn btn-primary">add another</button> </a>';

if(isset($_POST['add_to_cart1'])){

    
    echo
    '<tbody>
      <tr>
        
        <td>'.$id1.'</td>
        <td>'.$name1.'</td>
        <td>'.$price1.'</td>
        <td>'.$price1.'</td>
        </tr>
      
   
    </tbody>
  </table>';
  
   }


  }

break;
}
?>

</div>



</section>

    
<!-- <section>  -->

<div class="orderform" id="order">
    <h1 class="h14">PROVIDE SOME ORDER DETAILS</h1>
  
    
<form  action="index3.php" method="POST" class="row g-3">
  
  
      <div class="col">
        <label class="form-label">Name</label>
      <input type="text" name="name1" maxlength="20"  class="form-control" placeholder="Enter your full name" aria-label="Name" Required>
    </div>
  

        <div class="col2">
          <label for="inputEmail4" class="form-label">Phone No</label>
          <input type="tel" name="phoneno1" maxlength="10" class="form-control" id="inputEmail4" placeholder="Enter your Phone No" Required>
        </div>

        <div class="col2">
          <label for="inputAddress" class="form-label">Email</label>
          <input type="email" name="email1" maxlength="30" class="form-control" id="inputAddress" placeholder="Enter your Email" Required>
        </div>
          
        <div class="col2">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="address1" class="form-control" maxlength="50" id="inputAddress" placeholder="Enter your Address" Required>
        </div>
      
        <!-- <div class="col2">
          <label for="inputAddress" class="form-label">Order</label>
          <input type="text" name="order1" class="form-control" id="inputAddress" maxlength="20" placeholder="Enter your order" Required>
        </div>
       -->

        <div class="col3">
          <button name="submit"  type="submit" class="btn btn-primary">SAVE</button>
        </div>
</form>
</div>
         <!-- </section> -->
      






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