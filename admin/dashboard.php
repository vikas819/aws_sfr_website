<?php $currentpage = 'Dashboard';
include('include/sfrmedical_admin.php');
include('header.php');?>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
							<div><?php echo $admin->date_today(); ?>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
                           
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="m-portlet m-portlet--border-bottom-success ">
                                            <div class="m-portlet__body">
                                                <div class="m-widget26">
                                                    <div class="m-widget26__number">
                                                        <span id="corporatecount">
                                                            <?php 
                                                                $count12 = $admin->get_data_count("SELECT jid FROM sfr_joining_master WHERE joining_status = 0 AND status = 0  ");
                                                                $count121 = $admin->get_data_count("SELECT jid FROM sfr_joining_master WHERE status = 0  ");
                                                                echo $count12; 
                                                            ?><small>/<?php echo @$count121;?></small>
                                                        </span>
                                                        <small>Join Our Panel</small>
                                                        <a href="joining_list.php" class="btn btn-sm btn-success">View List <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="m-portlet m-portlet--border-bottom-warning ">
                                            <div class="m-portlet__body">
                                                <div class="m-widget26">
                                                    <div class="m-widget26__number">
                                                        <span id="usercount">
                                                            <?php 
                                                                $count13 = $admin->get_data_count("SELECT sid FROM sfr_sales_master WHERE sales_status = 0 AND status = 0  ");
                                                                $count131 = $admin->get_data_count("SELECT sid FROM sfr_sales_master WHERE status = 0  ");
                                                                echo $count13; 
                                                            ?><small>/<?php echo @$count131;?></small>
                                                        </span>
                                                        <small>Contact Sales</small>
                                                        <a href="sales_list.php" class="btn btn-sm btn-warning">View List <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="m-portlet m-portlet--border-bottom-danger ">
                                            <div class="m-portlet__body">
                                                <div class="m-widget26">
                                                    <div class="m-widget26__number">
                                                        <span id="brandcount">
                                                            <?php 
                                                                $count11 = $admin->get_data_count("SELECT cid FROM sfr_contact_master WHERE contact_status = 0 AND status = 0  ");
                                                                $count111 = $admin->get_data_count("SELECT cid FROM sfr_contact_master WHERE status = 0  ");
                                                                echo $count11; 
                                                            ?><small>/<?php echo @$count111;?></small>
                                                        </span>
                                                        <small>Contact Support</small>
                                                        <a href="contact_list.php" class="btn btn-sm btn-danger">View List <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="m-portlet m-portlet--border-bottom-primary ">
                                            <div class="m-portlet__body">
                                                <div class="m-widget26">
                                                    <div class="m-widget26__number">
                                                        <span id="usercount">
                                                            <?php 
                                                                $count14 = $admin->get_data_count("SELECT nid FROM sfr_newsletter_master WHERE news_status = 0 AND status = 0  ");
                                                                $count141 = $admin->get_data_count("SELECT nid FROM sfr_newsletter_master WHERE status = 0  ");
                                                                echo $count14; 
                                                            ?><small>/<?php echo @$count141;?></small>
                                                        </span>
                                                        <small>Newsletter</small>
                                                        <a href="newsletter_list.php" class="btn btn-sm btn-primary">View List <i class="fa fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
					</div>
				</div>
<?php include('footer.php');?>
<script>
    // function unsetNotification(id){
    //     $.ajax({
    //         url :"ajax_data.php?unsetNotification="+id,
    //         type:"POST",
    //         cache:false,
    //         success : function(data) {
    //             $("#show_notification").html(data);
    //             // alert(data);
    //         }
    //     });
    // }
    // function showNotifications(){
    //     $.ajax({
    //         url :"ajax_data.php?display_notification",
    //         type:"POST",
    //         cache:false,
    //         success : function(data) {
    //             $("#show_notification").html(data);
    //             // alert(data);
    //         }
    //     });
    // }
    // showNotifications();
</script>