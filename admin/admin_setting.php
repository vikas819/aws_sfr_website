<?php $currentpage = 'Setting';
include('include/sfrmedical_admin.php');

	$stmt = $admin->get_data_single( "SELECT * FROM sfr_setting_master where sid = '1'" );
	if (!empty($stmt)) {
		extract($stmt);
	}else{
		$admin->redirect('dashboard.php');
	}


if (isset($_POST['submit'])) {
	$web_title      = $admin->test_input($_POST['txt_title']);
	$web_keyword    = $admin->test_input($_POST['txt_keyword']);
	$web_copy       = $admin->test_input($_POST['txt_copy']);
	$web_desc       = $admin->test_input($_POST['txt_desc']);
	$fb             = $admin->test_input($_POST['fb']);
	$tw             = $admin->test_input($_POST['tw']);
	$ln             = $admin->test_input($_POST['ln']);
	///Header logo image
	$image1        = $_FILES['header_logo']['name'];
	$image_size1   = $_FILES['header_logo']['size'];
	$image_tmp1    = $_FILES['header_logo']['tmp_name'];
	$img_explod1   = explode(".", $image1);
	$img_ext1      = end($img_explod1);

	if(empty($image1)) {  
		$post_image1   = $text5;
		$img_path1     ='';
		$old_image1    ='';
	} else {
		$post_image1   ='headerlogo_'.uniqid().'.'.$img_ext1;
		$img_path1     ="upload/". $post_image1;
		$old_image1    = $text5;
	}

	///footer logo image
	$image2        = $_FILES['footer_logo']['name'];
	$image_size2   = $_FILES['footer_logo']['size'];
	$image_tmp2    = $_FILES['footer_logo']['tmp_name'];
	$img_explod2   = explode(".", $image2);
	$img_ext2      = end($img_explod2);

	if(empty($image2)) {  
		$post_image2   = $text6;
		$img_path2     ='';
		$old_image2    ='';
	} else {
		$post_image2   ='footerlogo_'.uniqid().'.'.$img_ext2;
		$img_path2     ="upload/". $post_image2;
		$old_image2    = $text6;
	}

	///Favicon image
	$image3        = $_FILES['web_favicon']['name'];
	$image_size3   = $_FILES['web_favicon']['size'];
	$image_tmp3    = $_FILES['web_favicon']['tmp_name'];
	$img_explod3   = explode(".", $image3);
	$img_ext3      = end($img_explod3);

	if(empty($image3)) {  
		$post_image3   = $text7;
		$img_path3     ='';
		$old_image3    ='';
	} else {
		$post_image3   ='favicon_'.uniqid().'.'.$img_ext3;
		$img_path3     ="upload/". $post_image3;
		$old_image3    = $text7;
	}

	if ($admin->updateadmin_setting($web_title,$web_keyword,$web_copy,$web_desc,$post_image1,$post_image2,$post_image3,$fb,$tw,$ln)) {
		/////header logo
		move_uploaded_file($image_tmp1,$img_path1);
		$admin->removeOldImage($old_image1,'upload/');
		/////Footer logo
		move_uploaded_file($image_tmp2,$img_path2);
		$admin->removeOldImage($old_image2,'upload/');
		/////Favicon
		move_uploaded_file($image_tmp3,$img_path3);
		$admin->removeOldImage($old_image3,'upload/');
		/////redirect
		$admin->redirect('admin_setting.php?updated');
	}else{
		$error= '';
	}
}
include('header.php');?>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-lg-12">
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Settings
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<!-- <a href="#" class="btn btn-sm btn-primary">Back to list</a> -->
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="" method="post"  enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-md-4">
													<label>Website Title </label>
													<input type="text" class="form-control m-input" name="txt_title" value="<?php echo @$text1; ?>"  >
													<span class="m-form__help error"></span>
												</div>
												<div class="col-md-4">
													<label>Website Keywords </label>
													<input type="text" class="form-control m-input" name="txt_keyword" value="<?php echo @$text2; ?>"  >
													<span class="m-form__help error"></span>
												</div>
												<div class="col-md-4">
													<label>Copyright text </label>
													<input type="text" class="form-control m-input" name="txt_copy" value="<?php echo @$text3; ?>"  >
													<span class="m-form__help error"></span>
												</div>
												<div class="col-md-12">
													<label>Website Description </label>
													<textarea class="form-control m-input" id="exampleTextarea" rows="3" name="txt_desc" maxlength="250"><?php echo @$text4; ?></textarea>
													<span class="m-form__help error" id="charNum">Max 250 characters</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-md-3">
													<label for="example-text-input">Header Logo </label>
													<input class="form-control m-input" type="file" name="header_logo" accept="image/*" onchange="readURL(this);" >
													<span class="m-form__help error">File format : .jpg, .jpeg, .png only.</span>
												</div>
												<div class="col-md-3">
													<?php if (!empty($text5)) {
														echo '<img id="blah" src="upload/'.$text5.'" width="150">';
													}else{
														echo '<img alt="logo" id="blah" src="assets/add.png" width="150">';
													} ?>
												</div>
												<div class="col-md-3">
													<label for="example-text-input">Footer Logo </label>
													<input class="form-control m-input" type="file" name="footer_logo" accept="image/*" onchange="readURL_1(this);" >
													<span class="m-form__help error">File format : .jpg, .jpeg, .png only.</span>
												</div>
												<div class="col-md-3">
													<?php if (!empty($text6)) {
														echo '<img id="blah_1" src="upload/'.$text6.'" width="150">';
													}else{
														echo '<img alt="logo" id="blah_1" src="assets/add.png" width="150">';
													} ?>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-md-3">
													<label for="example-text-input">Favicon </label>
													<input class="form-control m-input" type="file" name="web_favicon" accept="image/*" onchange="readURL_2(this);" >
													<span class="m-form__help error">File format : .jpg, .jpeg, .png only.</span>
												</div>
												<div class="col-md-3">
													<?php if (!empty($text7)) {
														echo '<img id="blah_2" src="upload/'.$text7.'" width="150">';
													}else{
														echo '<img alt="logo" id="blah_2" src="assets/add.png" width="150">';
													} ?>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-md-4">
													<label>Facebook </label>
													<input type="url" class="form-control m-input" name="fb" value="<?php echo @$text8; ?>" placeholder="http://"  >
													<span class="m-form__help error"></span>
												</div>
												<div class="col-md-4">
													<label>Twitter </label>
													<input type="url" class="form-control m-input" name="tw" value="<?php echo @$text9; ?>" placeholder="http://"  >
													<span class="m-form__help error"></span>
												</div>
												<div class="col-md-4">
													<label>linkedin </label>
													<input type="url" class="form-control m-input" name="ln" value="<?php echo @$text10; ?>" placeholder="http://" >
													<span class="m-form__help error"></span>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-4"></div>
													<div class="col-lg-8">
														<button type="submit" name="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-secondary">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
							</div>
						</div>
						<!--End::Section-->
					</div>
				</div>
<?php include('footer.php');?>
<script>
	function countChar(val) {
        var len = val.value.length;
        if (len >= 200) {
          val.value = val.value.substring(0, 200);
        } else {
          $('#charNum').text(200 - len);
        }
      };
	<?php if (isset($_GET['updated'])) { ?>
		$(document).ready(function () {
			errorSuccess('Success','Updated Successfully!!');
		});
	<?php } ?>
</script>