<?php 
$currentpage = 'Admin Login';
include('include/sfrmedical_admin.php');
// echo $admin->convert_string("encrypt","nBp+Jgjs*x76wfK@");exit();
// echo session_id();
if(isset($_POST['submit'])) {
 extract($_POST);
 $user = $admin->test_input($username);
 $pass = $admin->test_input($password);
 if ($admin->doAdminlogin($user,$pass)) {
//     $admin->redirect('dashboard.php');
   echo "<script>window.open('dashboard.php','_self');</script>";
 }else{
   $error= 'Something went wrong!!!!.';
 }
}
?>

<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php echo @$web_title;?> | <?php echo @$currentpage;?> </title>
		<meta name="description" content="<?php echo @$web_title; ?>">
	    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon" />
	    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="upload/<?php echo $favicon; ?>" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(assets/bg-3.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<?php if(isset($header_logo) and !empty($header_logo)){ ?>
							<a href="index.php">
								<img alt="" src="upload/<?php echo $header_logo; ?>" width="150px" />
							</a>
							<?php } ?>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Admin Sign In</h3>
							</div>
							
							<form class="m-login__form m-form" action="" method="post" id="admin_login" autocomplete="off">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="username" value="" required="" >
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input " type="password" placeholder="Password" name="password" value="">
								</div>
								<!-- <div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--focus">
											<input type="checkbox" name="remember" value="1"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="#" id="" class="m-link">Forget Password ?</a>
									</div>
								</div> -->
								<div class="m-login__form-action">
									<button type="submit" name="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn--primary">Next</button>
									<br> 
									<?php if (isset($error)) { ?>
										<br><br> <span id="spin" style="color: red;"><?php echo @$error;?></span>
									<?php }  ?>
								</div>
							</form>
						</div>
						<!-- <div class="m-login__account">
							<span class="m-login__account-msg">
								Forgot password ?
							</span>&nbsp;&nbsp;
							<a href="forget_password.php" id="" class="m-link m-link--light m-login__account-link">Click Here</a><br>
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="register.php" id="" class="m-link m-link--light m-login__account-link">Sign Up</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--begin::Global Theme Bundle -->
		<script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
		<script src="assets/js/toastr.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->
		
	</body>

	<!-- end::Body -->
</html>