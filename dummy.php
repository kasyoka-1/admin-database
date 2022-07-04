<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";


// the variable $conn can be written as anything and still work but the have to be the same yaani $conn $conn or $mk $mk
$conn = mysqli_connect($server,$username,$password,$database);

$sqliQuery = mysqli_query($conn,"SELECT * FROM enrollment");
$fetchRecords = mysqli_fetch_array($sqliQuery);

// echo $fetchRecords['fullname'].' '.$fetchRecords['email'];

while ($fetchRecords = mysqli_fetch_array($sqliQuery)){


echo $fetchRecords['fullname'].'<br>'.$fetchRecords['email'].'<br>'.$fetchRecords['phonenumber'].'<br>';

}
?>