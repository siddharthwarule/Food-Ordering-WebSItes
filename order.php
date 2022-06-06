<html lang="en">
<head>
    <link rel="stylesheet" href="sid.css/sid2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="position">
        <nav class="navbar backGround">
             <u1 class="nav-list">
             
             
                 <li><a href="index.php">Home</a> </li>
               <li> <a href="index.php">Services</a></li>
               <li> <a href="index.php">Contact</a></li>
               <li> <a href="index.php">About</a></li>
               <li> <a href="index.php">Offer</a></li>
            
             </u1>
        </nav>
          </section>
        
          <section class="orderform" id="order">
    <h1 class="h14">MAKE YOUR ORDER</h1>
  
    
      <form  action="index.php" method="post" class="row g-3" >
  
  
      <div class="col">
        <label class="form-label">Name</label>
      <input name= "name"  type="text" class="form-control" placeholder="Enter your full name" aria-label="Name">
    </div>
  

        <div class="col2">
          <label for="inputEmail4" class="form-label">Phone No</label>
          <input type="number" Required name="phoneno" class="form-control" id="inputEmail4" placeholder="Enter your Phone No">
        </div>

        <div class="col2">
          <label for="inputAddress" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Enter your Email">
        </div>
          
        <div class="col2">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Enter your Address">
        </div>
      
        <div class="col2">
          <label for="inputAddress" class="form-label">Order</label>
          <input type="text" name="order" class="form-control" id="inputAddress" placeholder="Enter your order">
        </div>
      

        <div class="col3">
          <button name="submit" type="submit" class="btn btn-primary">ORDER NOW</button>
        </div>
      </form>
         </section>
      
         <?php require 'partials/_footer.php' ?>
       
        </body>



</html>
  
