<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <script language=”php”>
      
        </script>
    <style>
        #sign{
            border: 2px solid black;
            padding-left: 10px;
            padding-top: 25px;
            padding-bottom: 100px;
            background-color:rgb(214, 208, 198);
            width: 1000px;
            margin-left: 125px;
            margin-top: 50px;
        }
        h2{
            text-align: center;
        }
        #h{
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Sign Up(Make Your Account Instantly)</h2>


    <form action="/finalProject/singnUp.php" method="post" id="sign">
        <label for="fname">First Name: &nbsp;</label>
        <input type="text" name="fname" id="fname">

        <label for="mname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle Name: &nbsp;</label>
        <input type="text" name="mname" id="mname">

        <label for="lname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name: &nbsp;</label>
        <input type="text" id="lname" id="lname" ><br><br><br>

        <label for="father_name">Father's Name: &nbsp;</label>
        <input type="text"  id="father_name" name="father_name">

        <label for="mother_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mother's Name: &nbsp;</label>
        <input type="text" id="mother_name" name="mother_name" required><br><br><br>

        <label for="date_of_birth">Date Of Birth: &nbsp;</label>
        <input type="date" name="date_of_birth" id="date_of_birth">

        <label for="num">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone No: &nbsp;</label>
        <input type="number" id="num" name="num">

        <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: &nbsp;</label> 
        <input type="email" id="email" name="email" required><br><br><br>

        <label for="adhar">Adhaar No: &nbsp;</label>
        <input type="number" name="adhar" id="adhar">

        <label for="address">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address: &nbsp;</label>
        <input type="text" id="address" name="address" ><br><br><br>

        <label for="ac">Account No: &nbsp;</label>
        <input type="number" name="ac" id="ac"><br><br>

        <div>
            <h3>Make suitable username and password</h3>
            <form>
                <label for="user_name">UserName: &nbsp;</label>
                <input type="text" id="user_name" name="user_name"><br><br><br>

                <label for="pass">Password: &nbsp;</label>
                <input type="password" id="pass" name="pass">

                <label for="con_pass"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirm Password: &nbsp;</label>
                <input type="password" id="con_pass" name="con_pass">
               <br>
                <input style=" text-align: center;
            margin-top: 20px; margin-left:auto;" type="submit" name="submit">
            </form>
        </div>
        

      
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $First_Name=$_POST['fname'];
        $Middle_Name=$_POST['mname'];
        $Last_Name=$_POST['lname'];
        $Father_Namen=$_POST['father_name'];
        $Mother_Name=$_POST['mother_name'];
        $date_of_birth=$_POST['date_of_birth'];
        $Phone_No=$_POST['num'];
        $Email=$_POST['email'];
        $Addhar_No =$_POST['adhar'];
        $Address=$_POST['address'];
        $Acc_No=$_POST['ac'];
        $User_name=$_POST['user_name'];
        $Password=$_POST['pass'];
        $Confirm_Passw=$_POST['con_pass'];

        $servername="localhost";
        $username="root";
        $password="";
        $database="finalproject";

        $conn= mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            die("Sorry database connection unsuccessful");
        }else{
            $sql="INSERT INTO `signuppage` (`First_Name`, `Middle_Name`, `Last_Name`, `Father_Name`, `Mother_Name`, `date_of_birth`, `Phone_No`, `Email`, `Addhar_No`, `Address`, `Acc_No`, `User_name`, `Password`, `Confirm_Passw`) VALUES ('$First_Name', '$Middle_Name', '$Last_Name', '$Father_Namen', '$Mother_Name', '$date_of_birth', '$Phone_No', '$Email', '$Addhar_No', '$Address', '$Acc_No', '$User_name', '$Password', '$Confirm_Passw')";

            $result=mysqli_query($conn,$sql);
            if(!$result){
              die("Sorry sql query unsuccessful");
            }
        }
    }
    ?>
    
</body>
</html>