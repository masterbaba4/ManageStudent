
<?php


include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta nmae="viewport"content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
       <title>REGISTRATION</title> 
       <link rel="stylesheet" type="text/css" href="style.css">  
</head> 
<body>
    
<div class="container">
   <?php 
$sql = "select * from students where roll_no='$roll_no'";

$result = $conn->query($sql);

   if ($result->num_rows > 0) {

       $row = $result->fetch_assoc();

       $s_no = $row["s_no"];
       $roll_no = $row["roll_no"];
       $name = $row["name"];
       $fathers_name = $row["fathers_name"];
       $email = $row["email"];
       $password = $row["password"];
       $class = $row["class"];
   ?>
    <form action="#" method="POST">
    <div class="title">Student Data Update FORM</div>
    <div class="form">

        <div class="input_field">
            <label>s_no</label>
            <input type="text" class="input" name="s_no"required>
        </div>
        <div class="input_field">
            <label>roll_no</label>
            <input type="text" class="input" name="roll_no"required>
        </div>
    
 <div class="input_field">
    <label>name</label> 
    <input type="text" class="input" name="name"required>
</div> 
<div class="input_field">
    <label>fathers_name</label> 
    <input type="text" class="input" name="fathers_name"required>
</div> 
<div class="input_field">
            <label>Email</label>
            <input type="text" class="input" name="email"required>
        </div> 
       
<div class="input_field">
            <label>password</label>
            <input type="text" class="input"name="password"required>
        </div>
    
      
       
        
     
        <div class="input_field">
    <label>class </label>
    <input type="" class="input"name="class"required>
</div>
       
       


    
            


    
        
        
    <div class="input_field terms">
        <label class="check">
     <input type="checkbox">
     <span class="checkmark"> agree to terms and conditions</span> </label>
            
    </div>  
    
    <div class="input_field">
    <input type="submit" value="update" class="btn" name ="update">
</div>
  
    </div>
</body>
</html>



<?php

       if ($_POST['update']) {
           $s_no = $_POST['s_no'];
           $roll_no = $_POST['roll_no'];
           $pwd = $_POST['password'];

           $name = $_POST['name'];
           $email = $_POST['email'];
           $fathers_name = $_POST['fathers_name'];
           $class = $_POST['class'];



           $query = "UPDATE `students` SET `s_no` = '$s_no', `roll_no` = '$roll_no', `name` = '$name', 
     `fathers_name` = '$fathers_name', `email` = '$email', `password` = '$pwd', `class` = '$class' WHERE `students`.`roll_no` = $roll_no ";

           $data = mysqli_query($conn, $query);

           if ($data) {
               echo "data updated into database";
           } else {
               echo "failed";
           }

       }

   }
?>

