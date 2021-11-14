<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="train.css">
</head>
<body>
    <form action="/finalProject/train.php" method="post">
        <Label for="train_number">Train_Number:</Label>
        <input type="text" name="train_number" value="110A2" id="tain_num" required><br><br>

        <Label for="train_name">Train_Name:</Label>
        <input type="text" name="train_name" value="110A2" id="train_name" required><br><br>

        <Label for="start_station">Start_Station:</Label>
        <input type="text" name="start_station" value="110A2" id="start_station" required><br><br>

        <Label for="end_station">End_Station:</Label>
        <input type="text" name="end_station" value="110A2" id="end_station" required><br><br>

        <Label for="start_date">Start_Date:</Label>
        <input type="date" name="start_date" value="110A2" id="start_date" required><br><br>

        <Label for="end_date">End_Date:</Label>
        <input type="date" name="end_date" value="110A2" id="end_date" required><br><br>

        <Label for="start_time">Start_Time:</Label>
        <input type="time" name="start_time" value="110A2" id="start_time" required><br><br>

        <Label for="end_time">End_Time:</Label>
        <input type="time" name="end_time" value="110A2" id="end_time" required><br><br>
    
        <input type="submit" placeholder="Submit" name="submit">

       


    </form>

    <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $train_number=$_POST['train_number'];
           $Train_name=$_POST['train_number'];
           $start_station=$_POST['start_station'];
           $end_station=$_POST['end_station'];
           $start_date=$_POST['start_date'];
           $end_date=$_POST['end_date'];
           $start_time=$_POST['start_time'];
           $end_time=$_POST['end_time'];

           $servername="localhost";
           $username="root";
           $password="";
           $database="finalproject";

           $conn= mysqli_connect($servername,$username,$password,$database);

           if(!$conn){
               die("Sorry database connection unsuccessful");
           }else{
              $sql="INSERT INTO `train` (`train_id`, `train_number`, `train_name`, `train_start_date`, `train_end_date`, `train_start_time`, `train_end_time`, `train_start_station`, `train_end_station`) VALUES (NULL, '$train_number', '$Train_name', ' $start_date', '$end_date', '$start_time', '$end_time', '$start_station', ' $end_station')"; 

              $result=mysqli_query($conn,$sql);
              if(!$result){
                die("Sorry sql query unsuccessful");
              }
           }
       }
    ?>
</body>
</html>