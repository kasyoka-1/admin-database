<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <p3 style="color:#fff; text-align:centre">
            Zalego/Admin Register
        </p3>
    </div>







    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="card" style="width:50rem;">
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="mb-3 col-lg-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-3">
                                <label for="confirm" class="form-label">Confirm:</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            
                            <button type="registerbtn" class="btn btn-primary">Submit</button>
                            <p3>Have an account? Sign in <a href="#">here</a></p3>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        

    </div>










<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>