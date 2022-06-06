<?php
  $conn = mysqli_connect('localhost','root',"") or die(mysqli_error());
    $db_select=mysqli_select_db($conn,'weborder')or die(mysqli_error());
  ?>