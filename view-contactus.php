<?php
//database connection
require_once('logics\dbconnection.php');
$sqlfetchuser=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");

while($fetchuserrecords=mysqli_fetch_array($sqlfetchuser))
{
    $id = $fetchuserrecords['no'];
    $firstname = $fetchuserrecords['firstname'];
    $lastname = $fetchuserrecords['lastname'];
    $phonenumber = $fetchuserrecords['phonenumber'];
    $emailaddress = $fetchuserrecords['email'];
    $Message = $fetchuserrecords['message'];
    
    
}



?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>


	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <div class="card-title">Personal Information</div>
                        </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <div class="list-group-item">Firstname <span class="float-right badge badge-info"><?php echo $firstname?></span></div>
                                    <div class="list-group-item">Lastname<span class="float-right badge badge-secondary"><?php echo $lastname?></span></div>
                                    <div class="list-group-item">Phone Number<span class="float-right badge badge-danger"><?php echo $phonenumber?></span></div>
                                </div>
                            </div>
                         </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <div class="card-title">Personal Information</div>
                        </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <div class="list-group-item">Email <span class="float-right badge badge-info"><?php echo $emailaddress?></span></div>
                                    <div class="list-group-item">Message<span class="float-right badge badge-secondary"><?php echo $Message?></span></div>
                                </div>
                            </div>
                         </div>
                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>