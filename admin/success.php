<?php 
$currentpage = 'Admin Login';
include('include/builders_hive_admin.php');
// if(!isset($_SESSION['username'])){ 
//     echo "<script>window.open('".$web_url."','_self');</script>";
// }

if (isset($_GET['verified'])) {
  $id = $admin->test_input($_GET['verified']);

  $count  = $admin->get_data_count("SELECT * FROM sfr_admin_master where email_verify = '$id' and admin_status = 1 ");
  echo $count;
  if ($count == 1) {
      $admin->runQuery("UPDATE sfr_admin_master SET email_verify = '1' where email_verify = '$id' and admin_status = 1 ");
      $msg = "Email verified Successfully";
  }else{
    //   $admin->redirect('404.php');
      $msg = "Email already verified";
  }

}else{
    $admin->redirect('index.php');
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
							<a href="<?php echo $web_url; ?>">
								<img src="upload/logo.png" width="150px">
								
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title"><?php echo @$msg;?></h3>
							</div>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="register.php" id="" class="m-link m-link--light m-login__account-link">Sign Up</a><br>
							<span class="m-login__account-msg">
								Already have an account ?
							</span>&nbsp;&nbsp;
							<a href="<?php echo $web_url;?>" id="" class="m-link m-link--light m-login__account-link">Sign In</a>
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
		
		<script>
		    $(document).ready(function () {
                // Handler for .ready() called.
                window.setTimeout(function () {
                    location.href = "<?php echo $web_url;?>";
                }, 3000);
            });
		</script>
		
	</body>

	<!-- end::Body -->
</html>