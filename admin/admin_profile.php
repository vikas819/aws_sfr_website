<?php $currentpage = 'Profile';
include('include/sfrmedical_admin.php');

if (isset($_POST['submit'])) {
	$id = $_SESSION['sfr_admin_id'];
	$admin_name = $admin->test_input($_POST['admin_name']);
	$admin_email = $admin->test_input($_POST['admin_email']);

	///Coupon image image
	$admins_profile        = $_FILES['profile_pic']['name'];
	$admin_profile_size   = $_FILES['profile_pic']['size'];
	$admin_profile_tmp    = $_FILES['profile_pic']['tmp_name'];
	$admin_profile_explod   = explode(".", $admins_profile);
	$admin_profile_ext      = end($admin_profile_explod);

	if(empty($admins_profile))
	{  
	$admin_profile_new    =$admin_profile;
	$admin_profile_path     ='';
	$admin_profile_old    ='';
	}
	else{
	$admin_profile_new    ='admin_'.uniqid().'.'.$admin_profile_ext;
	$admin_profile_path     ="upload/". $admin_profile_new;
	$admin_profile_old    = $admin_profile;
	}
	if (!empty($admin_email)) {
	    // echo $admin_profile_new;
		if($admin->updateAdmin_profile($id,$admin_name,$admin_email,$admin_profile_new)) {
			move_uploaded_file($admin_profile_tmp,$admin_profile_path);
			$admin->removeOldImage($admin_profile_old,'upload/');;
			$admin->redirect('admin_profile.php?success');
		}else{
			$error= "errorDanger('Error','Some thing went wrong !!');";
		}
	}else{
		$error= "errorDanger('Error','Email already exist !!');";
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
				<div class="tab-pane active" id="m_admin_profile_tab_1">
					<form class="m-form m-form--fit m-form--label-align-right" action="" method="post"  enctype="multipart/form-data">
						<div class="m-portlet__body">
							

							<!-- <div class="form-group m-form__group row">
								<div class="col-10 ml-auto">
									<h3 class="m-form__section">1. Personal Details</h3>
								</div>
							</div> -->

							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Full Name</label>
								<div class="col-7">
									<input class="form-control m-input" type="text" name="admin_name" value="<?php echo @$admin_name; ?>">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Email</label>
								<div class="col-7">
									<input class="form-control m-input" type="email" name="admin_email" value="<?php echo @$admin_email; ?>" readonly="">
								</div>
							</div>
							<div class="form-group m-form__group row">
								<label for="example-text-input" class="col-2 col-form-label">Profile</label>
								<div class="col-7">
									<input class="form-control m-input" type="file" name="profile_pic" accept="image/*" onchange="readURL(this);">
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions">
								<div class="row">
									<div class="col-2">
									</div>
									<div class="col-7">
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
	errorSuccess('Success','Profile Updated Successfully!!');
});
<?php } if (isset($error)) { echo $error; } ?>
</script>