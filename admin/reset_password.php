<?php 
$currentpage = 'Admin Login';
include('include/builders_hive_admin.php');

if (!isset($_POST['submit']) and !isset($_GET['reset'])) {
    $admin->redirect("index.php");
}

if(isset($_GET['reset']) and !empty($_GET['reset'])){
    $id = $_GET['reset'];
    $stmt = $admin->get_data_single("SELECT * FROM bh_admin_master WHERE pass_verify = '$id'");
    if(!empty($stmt)){
        extract($stmt);
    }else{
        $admin->redirect("index.php");
    }
}


if (isset($_POST['submit'])) {
	extract($_POST);
	$uid = $admin->test_input($uid);
	$pass = $admin->test_input($pass);
	$cpass = $admin->test_input($cpass);
	if ($pass == $cpass) {
	    $pass = $admin->convert_string('encrypt',$pass);
	    $stmt = $admin->runQuery("UPDATE bh_admin_master SET admin_pass = '$pass', pass_verify = '1' WHERE uid = '$uid'");
	    $admin->redirect("reset_password.php?success");
	}else{
		$error= 'Something went wrong !!!!.';
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
    <link rel="shortcut icon" href="../upload/<?php echo $favicon; ?>" />
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
							<a href="<?php echo $web_url; ?>">
								<img src="../upload/logo.png" width="150px">
								
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Reset Password</h3>
							</div>
							<form class="m-login__form m-form" action="" method="post" id="reset_password">
								<div class="form-group m-form__group" style="text-align:center;">
									<label>Hi, <?php echo ucfirst($admin_name);?></label>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Enter Password" name="pass" value="" required="" >
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Confirm Password" name="cpass" value="" required="" >
								</div>
								<div class="m-login__form-action">
									<input class="form-control m-input" type="hidden" placeholder="Confirm Password" name="uid" value="<?php echo @$uid;?>"  >
									<button type="submit" name="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn--primary">Reset</button>
									<br>
									<?php if (isset($error)) { ?>
										<br><br> <span id="spin" style="color: red;"><?php echo @$error;?></span>
									<?php } if (isset($_GET['success'])) { ?>
										<br><br> <span id="spin" style="color: green;">Password Changed Successfully.</span>
									<?php } ?>
									
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Already have an account ?
							</span>&nbsp;&nbsp;
							<a href="<?php echo @$web_url;?>" id="" class="m-link m-link--light m-login__account-link">Sign In</a>
						</div>
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
		<?php if (isset($_GET['success'])) { ?>
		<script>
		    $(document).ready(function () {
                // Handler for .ready() called.
                window.setTimeout(function () {
                    location.href = "<?php echo $web_url;?>";
                }, 3000);
            });
		</script>
		<?php }  ?>
	</body>

	<!-- end::Body -->
</html>