<script type="text/javascript">
if(confirm("Do you want to delete ?")){
    <?php
include("connection.php");
$query = "DELETE FROM students WHERE roll_no = '$_POST[roll_no]'";
$query_run = mysqli_query($conn, $query);
?>
window.location.href = "admin_dashboard.php";
}

else{
    window.location.href = "admin_dashboard.php";
}

</script>