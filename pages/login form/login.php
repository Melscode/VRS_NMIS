<?php include '../../includes/functions.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
					<!-- Company Logo -->
					<div class="text-center mb-3 mt-5">
						<img src="images/NMIS_LOGO.png" width="150px">
					</div>
					<div class="text-center mb-4">
			      <h4>Login into your account</h4>
			    </div>
					<?php echo login();?>

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
					<form  class="px-3" method = "POST">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="text" name="employee_id" placeholder="Employee_ID" tabindex="20">
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password">
						</div>


						<div class="form-input">
						</div>
						<div class="row mb-3">
						<!-- Remember Checkbox -->
			        <div class="col-auto d-flex align-items-center">
			          <div class="custom-control custom-checkbox">
			            <input type="checkbox" class="custom-control-input" id="cb1">
			           	<label class="custom-control-label text-white" for="cb1">Remember me</label>
			          </div>
			        </div>
			 	    </div>
			 	    <!-- Login Button -->
			      <div class="mb-3"> 
							<button type="submit" class="btn btn-block">Login</button>
							<!-- <button type="submit" class="btn btn-block">Track your Document</button> -->

						</div>
						<div class="text-right ">
			        <a href="reset.html" class="forget-link">Forgot password?</a>
			      </div>
						<!--<div class="text-center mb-2">
		         	<div class="text-center mb-2 text-white">or login with</div>--> 
		         	<!-- Google Button -->
					<!--<div class="mb-3"> 
						<button type="submit" href="" class="btn btn-block">Govmail</button>
					</div>
						</div>--> 

						<div class="text-center mb-5 text-white">Don't have an account? 
							<a class="register-link" href="register.php">Register here</a>
			     	</div>
					</form>
				</div>					
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
					</div>
</body>
</html>
