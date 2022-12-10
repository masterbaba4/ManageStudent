<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    session_start();
   
    ?>
</head>

<body>
  
    <div id = "header">
        <center><br><h1>Student Management system  </h1><br>Teachers Email: <?php echo $_SESSION ['email']; ?> <br> Name:<?php echo $_SESSION ['name']; ?></center>
        <a href="logout.php"> LogOut</a>
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
                <tr>
                    <td>
                       
                        <input type="submit" name="delete_student" value="Delete student">
                        
                    </td>
                </tr>
            </table>
        </form>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_teacher" value="Search Teacher">
                        <input type="submit" name="edit_teacher" value="Edit Teacher">
                        
                        
                        <input type="submit" name="view_teacher" value="View All Teacher">
                    </td>
              
            </table>
        </form>

    </div>

    <div id=""><br><br>
    <div id="s_search" >
    <?php
    error_reporting(0);
    if (isset($_POST['search_student'])) {
    ?>
        <center>
        <form action="" method="POST">
            Enter roll Number:
            <input type="text" name="roll_no">
            <input type="submit" name="search_roll_number_search" value="Search">
        </form>
        </center>
    
    
    <?php
    error_reporting(0);
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
            <form action="edit_student_teacher.php" method="POST">
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>"></td>
                </tr>
                <tr>
                    <td>S Number:</td>
                    <td><input type="text" name="s_no" value="<?php echo $row['s_no'];?>"></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                </tr>
                <tr>
                    <td>Fathers name:</td>
                    <td><input type="text" name="fathers_name" value="<?php echo $row['fathers_name'];?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
                </tr>
                <tr>
                    <td>Class:</td>
                    <td><input type="text" name="class" value="<?php echo $row['class'];?>"></td>
                </tr><br>
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="Save"></td>
                </tr>

            </table>
            </form>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    <div id=""><br><br>
    <div id="s_search" >
    <?php
    if (isset($_POST['delete_student'])) {
    ?>
        <center>
        <form action="" method="POST">
            Enter roll Number:
            <input type="text" name="roll_no">
            <input type="submit" name="search_roll_number_delete" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_roll_number_delete'])) {

        $query = "select * from students where roll_no = '$_POST[roll_no]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <form action="delete_student_teacher.php" method="POST">
            <table>
                <tr>
                    <td>Roll Number:</td>
                    <td><input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>" ></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $row['name'];?>" disabled></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="Delete"></td>
                </tr>

            </table>
            </form>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    <div>
        <div>
            <?php
            if (isset($_POST['create_student'])) {
                header("Location: student_reg_form.php");
            }
        ?> 
         
       
        </div>
    </div>
    <div>
        <div>
            <?php
            if (isset($_POST['view_student'])) {
                header("Location: student_display.php");
            }
        ?> 
         
       
        </div>
    </div>



    
    
    <div id=""><br><br>
    <div id="s_search" >
    <?php
    if (isset($_POST['search_teacher'])) {
    ?>
        <center>
        <form action="" method="POST">
            Enter ID Number:
            <input type="text" name="ID">
            <input type="submit" name="search_ID_search_teachers" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_ID_search_teachers'])) {

        $query = "select * from teachers where ID = '$_POST[ID]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <table>
                <tr>
                    <td>ID:</td>
                    <td><input type="text" value="<?php echo $row['ID'];?>" disabled></td>
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
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $row['email'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" value="<?php echo $row['password'];?>" disabled></td>
                </tr>
                <tr>

                    <td>Subject:</td>
                    <td><input type="text" value="<?php echo $row['subject'];?>" disabled></td>
                </tr>
                 <tr>
                    <td>contact Number:</td>
                    <td><input type="text" value="<?php echo $row['contact_no'];?>" disabled></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" value="<?php echo $row['address'];?>" disabled></td>
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
    if (isset($_POST['edit_teacher'])) {
    ?>
        <center>
        <form action="" method="POST">
            Enter ID Number:
            <input type="text" name="ID">
            <input type="submit" name="search_ID_edit_teacher" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_ID_edit_teacher'])) {

        $query = "select * from teachers where ID = '$_POST[ID]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <form action="edit_teacher_teacher.php" method="POST">
            <table>
                <tr>
                    <td>ID:</td>
                    <td><input type="text" name="ID" value="<?php echo $row['ID'];?>" ></td>
                </tr>
                <tr>
                    <td>S Number:</td>
                    <td><input type="text" name="s_no" value="<?php echo $row['s_no'];?>" ></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $row['name'];?>" ></td>
                </tr>
               
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $row['email'];?>" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password" value="<?php echo $row['password'];?>" ></td>
                </tr>
                <tr>

                    <td>Subject:</td>
                    <td><input type="text" name="subject" value="<?php echo $row['subject'];?>" ></td>
                </tr>
                 <tr>
                    <td>contact Number:</td>
                    <td><input type="text" name="contact_no" <?php echo $row['contact_no'];?>" ></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="<?php echo $row['address'];?>" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="Save"></td>
                </tr>
                

            </table>
            
            </form>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    <div id=""><br><br>
    <div id="s_search" >
    <?php
    if (isset($_POST['delete_teacher'])) {
    ?>
        <center>
        <form action="" method="POST">
            Enter ID Number:
            <input type="text" name="ID">
            <input type="submit" name="search_ID_delete_teacher" value="Search">
        </form>
        </center>
    
    
    <?php
    }
    include("connection.php");
        if (isset($_POST['search_ID_delete_teacher'])) {

        $query = "select * from teachers where ID = '$_POST[ID]'";
        $query_run = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <form action="delete_teacher_teacher.php" method="POST">
            <table>
                <tr>
                    <td>ID Number:</td>
                    <td><input type="text" name="ID" value="<?php echo $row['ID'];?>" readonly></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $row['name'];?>" disabled></td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="edit" value="Delete"></td>
                </tr>

            </table>
            </form>


      <?php  }

        }
    

?>

    </div>
   
    </div><br><br>

    
    <div>
        <div>
            <?php
            if (isset($_POST['view_teacher'])) {
                header("Location: teacher_display.php");
            }
        ?> 
         
       
        </div>
    </div>

</body>
</html>