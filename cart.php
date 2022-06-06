<?php

// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false ){


//   header("location: login.php");
//   exit();
//   } 

include("header.php");
?>

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
    <!-- <h1>Hello, world!</h1> -->

   
         <section id="snacks">    
    <form action="index2.php" method="POST">
              
       <div class="card1">
          <div class="card" style="width: 18rem;">
              <img src=".\img2\img2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Onian pizza</h5>
                <p class="card-text">Made using pizza sauce, onion, capsicum, tomatoes,
                   mozzarella, oregano, chilli flakes, salt and black pepper</p>
                <button  type="submit" value="add_to_cart1" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                <br>
 
                <br>
 
                <a href="/order.php" class="btn btn-primary">Order</a>

                 <input type="hidden" name="Item_name" value="Onian_pizza">
                 <br>
                 <br>
                  <input type="text" name="price" value="450">
              
              </div>
            </div>
            </form>


    <form action="index2.php" method="POST">
          
            <div class="card" style="width: 18rem;">
              <img src=".\img2\img3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Italian pizza</h5>
                <p class="card-text">it is a traditional Italian 
                  Some classic Italian ingredients such as Prosciutto San Daniele,black olives.</p>
                <button  type="submit" name="add_to_cart2" class="btn btn-primary">Add to Cart</button>
                <br>
  
                <br>
 
                <a href="/order.php" class="btn btn-primary">Order</a>
                 <input type="hidden" name="Item_name" value="Italian_pizza">
                 <br>
                 <br>
                  <input type="text" name="price" value="550">
              
              </div>
            </div>


            </form>




    <form action="index2.php" method="POST">
            
            <div class="card" style="width: 18rem;">
              <img src=".\img2\img4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Burger</h5>
                <p class="card-text">We are often served with cheese, lettuce, tomato, onion, pickles, bacon, or chilis</p>
                <button  type="submit" name="add_to_cart3" class="btn btn-primary">Add to Cart</button>
                <br>
 
                <br>

                <a href="/order.php" class="btn btn-primary">Order</a>
                 <input type="hidden" name="Item_name" value="Burger">
                 <br>
                 <br>
                  <input type="text" name="price" value="150">
              
              </div>
            </div>
            </form>


    <form action="index2.php" method="POST">
            
            <div class="card" style="width: 18rem;">
              <img src=".\img2\img7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Momose</h5>
                <p class="card-text"> Momose is probably the street food heaven for foodies ... than a steaming, hot plate of momos with a preferred condiment..</p>
                <button  type="submit" name="add_to_cart4" class="btn btn-primary">Add to Cart</button>
                <br>
 
                <br>
                <a href="/order.php" class="btn btn-primary">Order</a>
                 <input type="hidden" name="Item_name" value="momose">
                 <br>
                 <br>
                  <input type="text" name="price" value="250">
              
              
              </div>
              </div>
            </div>
            </form>
          
          </section>
             <section class="line2">
     <form action="index2.php" method="POST">
              
              <div class="card1">
                 <div class="card" style="width: 18rem;">
                     <img src=".\img2\img8.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Indian Momose</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button  type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                       <br>
        
                       <br>
        
                       <a href="/order.php" class="btn btn-primary">Order</a>
       
                        <input type="hidden" name="Item_name" value="Indian_momose">
                        <br>
                        <br>
                         <input type="text" name="price" value="250">
                     
                     </div>
                   </div>
                   </form>
       
       
     <form action="index2.php" method="POST">
                 
                   <div class="card" style="width: 18rem;">
                     <img src=".\img2\img9.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Frankie</h5>
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <button  type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                       <br>
         
                       <br>
        
                       <a href="/order.php" class="btn btn-primary">Order</a>
                        <input type="hidden" name="Item_name" value="Frankie">
                        <br>
                        <br>
                         <input type="text" name="price" value="150">
                     
                     </div>
                   </div>
       
       
                   </form>
       
       
       
       
    <form action="index2.php" method="POST">
                   
                   <div class="card" style="width: 18rem;">
                     <img src=".\img2\img6.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">French Fries</h5>
                       <p class="card-text">French Fries. Peel and Cut Potatoes. 1. First, grab 1 extra-large potato, 2 large potatoes or 
                         3 medium potatoes </p>
                       <button  type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                       <br>
        
                       <br>
       
                       <a href="/order.php" class="btn btn-primary">Order</a>
                        <input type="hidden" name="Item_name" value="french_fries ">
                        <br>
                        <br>
                         <input type="text" name="price" value="200">
                     
                     </div>
                   </div>
                   </form>
       
       
     <form action="index2.php" method="POST">
                   
                   <div class="card" style="width: 18rem;">
                     <img src=".\img2\img5.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                       <h5 class="card-title">Sandwitch</h5>
                       <p class="card-text">Some quick .</p>
                       <button  type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                       <br>
        
                       <br>
                       <a href="/order.php" class="btn btn-primary">Order</a>
                        <input type="hidden" name="Item_name" value="Sandwitch">
                        <br>
                        <br>
                         <input type="text" name="price" value="150">
                     
                     
                     </div>
                     </div>
                   </div>
                   </form>
       
          
             </section>
          
      
    
    
    
  

    

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