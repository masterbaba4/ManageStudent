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


$query= "SELECT * FROM teachers";
$data = mysqli_query( $conn ,$query);

$total= mysqli_num_rows($data);


//echo $total;

if($total != 0)
{
    ?>
    <h2 align ="center"><mark>Displaying All Students Records</mark></h2>
    <table border="2px" cellspacing="7"  align="center">
        <tr>
        <th width="8%">ID</th>
        <th width="8%">s_no</th> 
        <th width="6%">Name</th>
        
          <th width="20%">Email</th>
          <th width="10%">password</th>
          <th width="15%">subject</th>
          <th width="15%">Contact No</th>
          <th width="15%">Address</th>
</tr>
   
    
    
    
    <?php
     
    while($result= mysqli_fetch_assoc($data))
    {
      echo"<tr >
      <td >".$result['ID']."</td>
      <td >".$result['s_no']."</td>
      
      <td>".$result['name']."</td> 
      
      <td>".$result['email']."</td>
      <td>".$result['password']."</td>
      <td>".$result['subject']."</td>
      <td >".$result['contact_no']."</td>
      <td >".$result['address']."</td>
      
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