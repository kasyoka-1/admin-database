<?php
 require_once("logics/dbconnection.php");

$sqliQuery = mysqli_query($conn,"SELECT * FROM enrollment");



?>


<!DOCTYPE html>
<html>
<?php require_once("includes/headers.php")?>
<body>
	<!-- All our code. write here   -->
	<?php require_once("includes/navbar.php")?>


	<div class="sidebar">
	<?php require_once("includes/sidebar.php")?>

	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					
					<div class="row" style="padding-left:20px; padding-top:5px;">
						<a href="enroll.php" class="btn btn-primary"><i class="fa fa-plus"> Add</i></a>
					</div>


                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Enrolled On</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php  while($fetch = mysqli_fetch_array($sqliQuery)) {?>
									<tr>
										<td><?php echo $fetch['no']  ?></td>
										<td><?php echo $fetch['fullname']  ?></td>
										<td><?php echo $fetch['phonenumber']  ?></td>
										<td><?php echo $fetch['email']  ?></td>
										<td><?php echo $fetch['gender']  ?></td>
										<td><?php echo $fetch['course']  ?></td>
										<td><?php echo $fetch['created_at']  ?></td>
										<td>
											<a href="edit-enrollment.php?id=<?php echo $fetch['no']  ?>" class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="view-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="delete-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
                                    	</td>
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


