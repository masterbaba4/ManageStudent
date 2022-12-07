<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><br>
        <h2>Student Login</h2><br>
        <form action="" method="POST">
            <input type="text"   name="email" placeholder="Enter your mail ID "  required><br><br>
            <input type="text"   name="password" placeholder="Enter your password " required><br><br>
            <input type="submit" name="submit">
           

        </form><br>
        <?php
        if(isset($_POST['submit'])){
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"managestudent");
            $query = "select * from students where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                if($row['email'] == $_POST['email']){ 
                    if($row['password'] == $_POST['password']){
                     header("Location: student_dashboard.php");
                    }
                    else{ 
                        echo "wrong password";
                    }}
                else{
                    echo "wrong email";
                }
            }

        }
        ?>
       
    </center>
</body>
</html>