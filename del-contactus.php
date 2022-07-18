<?php
require_once('logics/dbconnection.php');
$sqldeletestudents = mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."'");
if($sqldeletestudents)
{
    echo "User Records Deleted";
    header('location:students.php');
}
else{
    echo "Error Occured";
}
?>