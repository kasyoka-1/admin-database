<?php 
$message = "";
require_once("logics/dbconnection.php");
$queryuser = mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");

while($fetchuser=mysqli_fetch_array($queryuser))
{
    $id = $fetchuser['no'];
    $fullname = $fetchuser['fullname'];
    $phonenumber = $fetchuser['phonenumber'];
    $email = $fetchuser['email'];
    $gender = $fetchuser['gender'];
    $course = $fetchuser['course'];
    
}

// update user records
if(isset($_POST["updatebutton"]))
{
    // fetch form data
    $name = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $emailAddress = $_POST['email'];
    $formgender = $_POST['gender'];
    $formcourse = $_POST['course'];


    // update records
    $updatequery = mysqli_query($conn, "UPDATE enrollment SET fullname='$name', phonenumber='$phone', email='$emailAddress', 
    gender='$formgender', course='$formcourse' WHERE no='".$_GET['id']."'");

    if($updatequery)
    {
        $message= "Data Updated";
    }
    else
    {
        $message= "Error occured";
    }
}




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
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Student: <?php echo $fullname ?></h4>
                            <span><?php echo $message ?></span>
                        </div>
                        <div class="card-body">
                            <form action="edit-enrollment.php?id=<?php echo $id?>" method="POST" class="container">
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="fullname" class="form-label">Full Name:</label>
                                            <input type="text" name="fullname" value="<?php echo $fullname?>" class="form-control" placeholder="Enter your full name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="phonenumber" class="form-label">Phone Number:</label>
                                            <input type="text" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="+2547...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="email" class="form-label">Email Address:</label>
                                            <input type="text" name="email" value="<?php echo $email?>" class="form-control" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">

                                            <label for="gender" class="form-label">Gender:</label><br>
                                            <select name="gender" class="form-control" name="gender" aria-label="Default select example">
                                                <option value="<?php echo $gender?>">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="course" class="form-label">Course:</label><br>
                                            <select class="form-control" name="course"  aria-label="Default select example">
                                                <option value="<?php echo $course?>">Software Development</option>
                                                <option value="Data analysis">Data analysis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-12">
                                            <button style="margin-top:10px" type="submit" name="updatebutton" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>



	<?php require_once("includes/scripts.php")?>

</body>
</html>