<?php $currentpage = 'Join Our Panel';
include('include/sfrmedical_admin.php');	

if (isset($_GET['i']) and !empty($_GET['i'])) {
	$id = $_GET['i'];
	$data = $admin->get_data_single("SELECT * FROM sfr_joining_master WHERE jid = '$id'");
	if (!empty($data)) {
		extract($data);
		$admin->runQuery("UPDATE `sfr_joining_master` SET `joining_status`=1 WHERE `jid`= '$id' ");
	}else{
		$admin->redirect("joining_list.php");exit();
	}
}else{
	$admin->redirect("joining_list.php");
	exit();
}

include('header.php');?>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-lg-7">
								<div class="m-portlet m-portlet--full-height">
								    <div class="m-portlet__head">
								        <div class="m-portlet__head-caption">
								            <div class="m-portlet__head-title">
								                <h3 class="m-portlet__head-text">
								                    <?php echo @$joining_subject; ?>
								                </h3>
								            </div>
								        </div>
								        <div class="m-portlet__head-tools">
								            <span class="m-badge m-badge--success m-badge--wide"><?php echo date('m-d-Y g:i A', strtotime($created_on)); ?></span>
								        </div>
								    </div>
								    <div class="m-portlet__body">
								        <div class="m-widget16">
								            <div class="row">
								                <div class="col-md-12">
								                    <div class="m-widget16__body">
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Name 
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo ucfirst(@$joining_fname) ." ".@$joining_lname; ?></span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Email
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo @$joining_email; ?> </span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Phone
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo @$joining_phone; ?> </span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Area of work
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo @$joining_workarea; ?> </span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Subject
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo @$joining_subject; ?> </span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Message
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> <?php echo @$joining_msg; ?> </span>
								                        </div>
								                        <!--end::widget item-->
								                        <!--begin::widget item-->
								                        <div class="m-widget16__item">
								                            <span class="m-widget16__date">
								                                Attached Document
								                            </span>
								                            <span class="m-widget16__price m--align-right m--font-brand"> 
								                            	<?php if (!empty($joining_doc)) { ?>
								                            		<a href="upload/<?php echo $joining_doc; ?>" download><?php echo $joining_doc; ?></a>
								                            	<?php } ?>
								                            </span>
								                        </div>
								                        <!--end::widget item-->
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>

							</div>
						</div>
						<!--End::Section-->
					</div>
				</div>
<?php include('footer.php');?>

</script>