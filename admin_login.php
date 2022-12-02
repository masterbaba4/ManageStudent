<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body>
    <center><br>
        <h2>Admin Login</h2><br>
        <form action="" method="POST">
            <input type="text" name="email" required><br><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="submit">
           

        </form><br>
        <?php
        if(isset($_POST['submit'])){
            $connection = mysqli_connect("localhost","root","");
            $db = mysqli_select_db($connection,"managestudent");
            $query = "select * from login where email = '$_POST[email]'";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                if($row['email'] == $_POST['email']){ 
                    if($row['password'] == $_POST['password']){
                     header("Location: admin_dashboard.php");
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