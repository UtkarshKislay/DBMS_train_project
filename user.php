<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
   header("location:login.php");
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
   

<style>
.navbar {
    background-color: black;
}

.navbar ul {
    overflow: auto;
}

.navbar li {
    float: left;
    list-style: none;
    margin: 20px 20px;
}

.navbar li a {
    padding: 10px 10px;
    text-decoration: none;
    color: white;
}

.Search {
        float: right;
        color: aliceblue;
        padding: 20px 90px;
    }

    .navbar input {
        border: 2px solid black;
        border-radius: 7px;
        padding: 3px 4px;
    }
</style>
</head>
<body>
<h1>Welcome!</h1>
 <?php
 $user=$_SESSION['username'];
 echo "<h1>$user</h1>";
 ?>
   <div class="container">
     
    
      
    
</div>
<nav class="navbar">
    <ul>
        <li><a href="https://google.com">Home</a></li>
        <li><a href="#">Balance</a></li>
        <li><a href="#">Details</a></li>
        <li><a href="#">Contact us</a></li>
        <div class="Search">
            <input type="text" name="Search" id="Search" placeholder="Search">
        </div>
    </ul>
</nav>
  

    

</body>
</html>