<html>
    <head>
        
        <title>Display</title>
        <style>
        body{
background: #D071f9;
            }
            table{
                background: white;
            }
        </style>

</head>

        <?php
include("connection.php");
error_reporting(0);  


$query= "SELECT * FROM students";
$data = mysqli_query( $conn ,$query);

$total= mysqli_num_rows($data);


//echo $total;

if($total != 0)
{
    ?>
    <h2 align ="center"><mark>Displaying All Records</mark></h2>
    <table border="1px" cellspacing="7"  align="center">
        <tr>
        <th width="8%">S_no</th>
        <th width="8%">Roll_no</th> 
        <th width="6%">Name</th>
         <th width="20%">Fathers name</th>
          <th width="20%">Email</th>
          <th width="10%">password</th>
          <th width="15%">Class</th>
</tr>
   
    
    
    
    <?php
     
    while($result= mysqli_fetch_assoc($data))
    {
      echo"<tr>
      <td>".$result['s_no']."</td>
      <td>".$result['roll_no']."</td>
      <td>".$result['name']."</td> 
      <td>".$result['fathers_name']."</td>
      <td>".$result['email']."</td>
      <td>".$result['password']."</td>
      <td>".$result['class']."</td>
      <td><a href='student_update.php?'>update</a></td>
</tr>"; 
    }

}
else
    {
echo"no record";
     }                              
  
?>
     </table>   
     </html>