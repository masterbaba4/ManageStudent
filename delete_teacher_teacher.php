<script type="text/javascript">
if(confirm("Do you want to delete ?")){
    <?php
include("connection.php");
$query = "DELETE from teachers WHERE ID = '$_POST[ID]'";
$query_run = mysqli_query($conn, $query);
?>
window.location.href = "teacher_dashboard.php";
}

else{
    window.location.href = "teacher_dashboard.php";
}

</script>