<?php
  include_once "../../includes/functions.php";


?>
<?php echo register();?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<!-- IMAGE CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
			<!-- IMAGE CONTAINER END -->

			<!-- FORM CONTAINER BEGIN -->
			<div class="col-lg-6 col-md-6 infinity-form-container">					
				<div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="images/NMIS_LOGO.png" width="150px">
					</div>
					<div class="text-center mb-4">
				    <h4>Create an account</h4>
				  </div>

				  <?php if(isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
          </div>
        <?php }elseif(isset($_GET['logout'])){ ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_GET['logout'];?>
          </div>
        <?php } ?>  
					<!-- Form -->
					<form  class="px-3" method="POST">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="employee_id" placeholder="Employee_ID" tabindex="50" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="first_name" placeholder="First_Name" tabindex="50" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="last_name" placeholder="Last_Name" tabindex="50" >
						</div>
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="username" placeholder="Username" tabindex="50" >
						</div>
						<div class="form-input">
							<span><i class="fa fa fa-user-o"></i></span>
							<input type="text" name="position" placeholder="Position" tabindex="50" >
						</div>
						<div class="form-input">
							<select name="division" class="form-control">
								<option  id= "division" value="">--Select Division--</option>
									<option value="Laboratory">Laboratory</option>
									<option value="POSMD">POSMD</option>
									<option value="MIED" >MIED</option>
									<option value="Cashier">Cashier</option>
									<option value="Engineering">Engineering</option>
									<option value="ARD">ARD</option>
									<option value="Property">Property</option>
									<option value="Records">Records</option>
									<option value="OED">OED</option>
									<option value="HRM">HRM</option>
									<option value="PIMD">PIMD</option>
									<option value="Admin">Admin</option>
									<option value="BAC">BAC</option>
									<option value="Accounting">Accounting</option>
							</select>
						</div><br>
						<div class="form-input">
							<span><i class="fa fa fa-user-o"></i></span>
							<input type="email" name="govmail" placeholder="Govmail" tabindex="50" >
						</div>
						<div class="form-input">
							<span><i class="fa fa fa-user-o"></i></span>
							<input type="number" name="contact_number" placeholder="Contact No." tabindex="50">
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" >
						</div>
						
						<!-- Register Button -->
				    <div class="mb-3"> 
							<button type="submit" name='register' class="btn btn-block">Register</button>
						</div>
						
						<div class="text-center mb-5 text-white">Already have an account?
							<a class="login-link" href="login.php">Login here</a>
		       	</div>
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>