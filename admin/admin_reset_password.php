<?php $currentpage = 'Reset Password';
include('include/sfrmedical_admin.php');

if (isset($_POST['submit'])) {
	$id = $admin->test_input($_POST['aid']);
	$opass = $admin->test_input($_POST['opass']);
	$npass = $admin->test_input($_POST['npass']);
	$cpass = $admin->test_input($_POST['cpass']);

	if ($npass == $cpass) {
		if($admin->checkAdmin_oldpassword($id,$opass)) { 
			if ($admin->resetAdmin_password($id,$npass)) {
				$admin->redirect('admin_reset_password.php?success');
			}else{
				$error= "errorDanger('Error','Some thing went wrong !!');";
			}
		}else{
			$error= "errorDanger('Error','Old password not matched!!');";
		}
	}else{
		$error= "errorDanger('Error','New password and confirm password not matched !!');";
	}
		
}
include('header.php');?>

				<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-content">
    <div class="row">
	<div class="col-xl-3 col-lg-4">
		<div class="m-portlet m-portlet--full-height  ">
			<div class="m-portlet__body">
				<div class="m-card-profile">
					<div class="m-card-profile__title m--hide">
						Your Profile
					</div>
					<div class="m-card-profile__pic">
						<div class="m-card-profile__pic-wrapper">	
							<?php if (!empty($admin_profile)) {
								echo '<img src="upload/'.$admin_profile.'" alt="" id="blah">';
							}else{
								echo'<img src="assets/user.png" alt="" id="blah">';
							} ?>
							
						</div>
					</div>
					<div class="m-card-profile__details">
						<span class="m-card-profile__name"><?php echo @$admin_name; ?></span>
						<a href="#" class="m-card-profile__email m-link"><?php echo @$admin_email; ?></a>
					</div>
				</div>	
			</div>			
		</div>	
	</div>
	<div class="col-xl-9 col-lg-8">
		<div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active"  href="admin_profile.php" >
								<i class="flaticon-share m--hide"></i>
								Update Profile
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" href="admin_reset_password.php">
								<i class="flaticon-share m--hide"></i>
								Reset Password
							</a>
						</li>

					</ul>
				</div>
				<div class="m-portlet__head-tools">
					
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="m_user_profile_tab_1">
					<form class="m-form m-form--fit m-form--label-align-right" action="" method="post"  enctype="multipart/form-data">
						<div class="m-portlet__body">
							

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Old Password</label>
								<div class="col-7">
									<input class="form-control m-input" type="password" name="opass" value="" required="">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">New Password</label>
								<div class="col-7">
									<input class="form-control m-input" type="password" name="npass" value="" required="">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Confirm Password</label>
								<div class="col-7">
									<input class="form-control m-input" type="password" name="cpass" value="" required="">
								</div>
							</div>

						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<div class="row">
									<div class="col-2">
									</div>
									<div class="col-7">
									    <input class="form-control m-input" type="hidden" name="aid" value="<?php echo @$_SESSION['sfr_admin_id'];?>" >
										<button type="submit" name="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
										<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>		        </div>
				</div>
<?php include('footer.php');?>

<script>
<?php if (isset($_GET['success'])) { ?>
$(document).ready(function () {
	errorSuccess('Success','Password changed Successfully!!');
});
<?php } if (isset($error)) { echo $error; } ?>
</script>