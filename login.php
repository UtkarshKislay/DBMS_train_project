<?php
$login=false;
$invalid=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "db_connect.php";

    $username=$_POST["User_name"];
    $password=$_POST["Password"];

    $sql="SELECT * FROM signuppage where User_name='$username' AND Password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
     $login=true;
     session_start();
   $_SESSION['loggedin']=true;
   $_SESSION['username']=$username;
   header("location: user.php");
    }else{
      $invalid =true;
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #form {
            float: right;
            background-color: aliceblue;
            border: 2px solid gray;
            width: 200px;
            height: 500px;
            margin-right: 300px;
        }

        h2 {
            text-align: center;
            font-size: large;

        }

        h3 {
            text-align: center;
            margin-top: 50px;
        }

        #img {
            float: right;
        }

        #sub {
            text-align: center;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
<?php
       if($login){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>'.$username.'</strong> Your are logged in.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>';
       }


       if($invalid){
          echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Error!</strong> Ivalid creditials.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
        
       }
      ?>
    <h1>Indian Railways</h1>
    <span>
        <form action="logIn.php" method="post" id="form" >
            <h2>LOGIN</h2><br><br>
            <label for="User_name">USERNAME &nbsp; &nbsp;</label>
            <input type="text" id="User_name" name="User_name"><br><br>
            <br>
            <label for="Password">PASSWORD &nbsp; &nbsp;</label>
            <input type="password" id="Password" name="Password"><br><br><br>
            <span id="sub">
                <input type="submit">
            </span>
            <a href="singnUp.php"><h3>SignUp</h3></a>

        </form>
        <span id="img">
           <?php
           echo "<img src='Image/rail.jpg' alt='oops' style='vertical-align: middle'; width='400px' height='503px'>";
           ?>
        </span>

    </span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
