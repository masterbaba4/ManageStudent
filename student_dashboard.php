<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    session_start();
   
    ?>
</head>

<body>
  
    <div id = "header">
        <center><br><h1>Student Management system  </h1><br> <?php echo $_SESSION ['email']; ?> <br> Name:<?php echo $_SESSION ['name']; ?></center>
    </div>
    <div id="left_side">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_student" value="Search student">
                      

                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input type="submit" name="edit_student" value="Edit student">
                       
                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input type="submit" name="create_student" value="Create student">
                       
                    </td>
                </tr>
                
            </table>
        </form>

    </div>
    <div id=""><br><br>
    <div id="s_search" >
    <?php
    if (isset($_POST['search_student'])) {
    ?>
        <center>
        <form action="" method="post">
            Enter roll Number:
            <input type="text" name="roll_no">
            <input type="submit" name="search_roll_number_search" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_roll_number_search'])) {

        $query = "select * from students where roll_no = '$_POST[roll_no]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="text" value="<?php echo $row['roll_no'];?>" disabled></td>
                </tr>
                <tr>
                    <td>S Number:</td>
                    <td><input type="text" value="<?php echo $row['s_no'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" value="<?php echo $row['name'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Fathers name:</td>
                    <td><input type="text" value="<?php echo $row['fathers_name'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $row['email'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Class:</td>
                    <td><input type="text" value="<?php echo $row['class'];?>" disabled></td>
                </tr>
            </table>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    <div id=""><br><br>
    <div id="s_search" >
    <?php
    if (isset($_POST['edit_student'])) {
    ?>
        <center>
        <form action="" method="post">
            Enter roll Number:
            <input type="text" name="roll_no">
            <input type="submit" name="search_roll_number_edit" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_roll_number_edit'])) {

        $query = "select * from students where roll_no = '$_POST[roll_no]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="text" value="<?php echo $row['roll_no'];?>"></td>
                </tr>
                <tr>
                    <td>S Number:</td>
                    <td><input type="text" value="<?php echo $row['s_no'];?>"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" value="<?php echo $row['name'];?>"></td>
                </tr>
                <tr>
                    <td>Fathers name:</td>
                    <td><input type="text" value="<?php echo $row['fathers_name'];?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                    <td>Class:</td>
                    <td><input type="text" value="<?php echo $row['class'];?>"></td>
                </tr>
            </table>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    

</body>
</html>