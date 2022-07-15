<?php
require_once("logics/dbconnection.php");

$sqliQuery = mysqli_query($conn,"SELECT * FROM contactus");
?>









<!DOCTYPE html>
<html>
<?php require_once("includes/headers.php")?>
<body>
	<?php require_once("includes/navbar.php")?>

	<div class="sidebar">
	    <?php require_once("includes/sidebar.php")?>
    </div>

    <div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Messages</span>
					</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Your Message</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php  while($fetch = mysqli_fetch_array($sqliQuery)) {?>
									<tr>
										<td><?php echo $fetch['no']  ?></td>
										<td><?php echo $fetch['firstname']  ?></td>
										<td><?php echo $fetch['lastname']  ?></td>
										<td><?php echo $fetch['phonenumber']  ?></td>
										<td><?php echo $fetch['email']  ?></td>
										<td><?php echo $fetch['message']  ?></td>
									</tr>
								<?php }?>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
			
		</div>
	</div>



    <?php require_once("includes/scripts.php")?>

</body>
</html>