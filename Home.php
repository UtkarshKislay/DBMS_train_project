<?php

$servername="localhost";
$username="root";
$password="";
$database="finalproject";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry database connection unsuccessful");
}else{
   $sql="SELECT * FROM train"; 

   $result=mysqli_query($conn,$sql);
   if(!$result){
     die("Sorry sql query unsuccessful");
   }

  $num=mysqli_num_rows($result);
  if($num>0){
     
      while($row=mysqli_fetch_assoc($result)){
        echo "Train number>". $row['train_number'] . "and train name". $row['train_name']." is starting from ".$row['train_start_date'];
         echo "<br>";
      }
    
  }


   

}

?>