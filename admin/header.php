<!DOCTYPE html>

<html lang="en" class="no-js">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php echo ucfirst(@$currentpage); ?> | <?php echo @$web_title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<link rel="icon" href="upload/<?php echo @$favicon;?>" type="image/x-icon" />
    	<link rel="shortcut icon" type="image/x-icon" href="../upload/<?php echo @$favicon;?>" />
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
		<!--begin::Page Vendors Styles -->
		<?php if($currentpage != 'Dashboard' ){ ?>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link href="assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->
		<style type="text/css">
		.error {color: red;}
		.invoice {position: relative;	background: #fff;/*border: 1px solid #5cb85c;padding: 20px;*/margin: 0px;}
		.page-header {padding-bottom: 9px;/*border-bottom: 1px solid #5cb85c;*/}
		.invoice.table-bordered>thead>tr>th, .invoice.table-bordered>tbody>tr>th, .invoice.table-bordered>tfoot>tr>th, .invoice.table-bordered>thead>tr>td, .invoice.table-bordered>tbody>tr>td, .invoice.table-bordered>tfoot>tr>td {border: 1px solid #111;}
		.form-control{border:1px solid #bec1c7;}
		.form-control[readonly], .form-control {/*border-color: #ebedf2;*/border: 1px solid #bec1c7;color: #575962;}
		.select2-container--default .select2-selection--single .select2-selection__rendered {color: #575962;border: 1px solid #bec1c7;}
		.input-group .input-group-append>.input-group-text, .input-group .input-group-prepend>.input-group-text {border: 1px solid #bec1c7;background-color: #f4f5f8;color: #575962;}
		.col-form-label{color: #646c9a !important;}
  		</style>
  		<?php } ?>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
								    <?php if(isset($header_logo) and !empty($header_logo)){ ?>
									<a href="<?php echo $web_url; ?>" class="m-brand__logo-wrapper">
										<img alt="" src="upload/<?php echo $header_logo; ?>" width="80px" />
									</a>
									<?php } ?>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>
									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<!-- <li  id="m_quick_sidebar_toggle" class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width">
											<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
												<span class="m-nav__link-icon"><i class="flaticon-alarm"></i></span>
											</a>
										</li> -->
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<?php if (!empty($admin_profile)) {
														echo '<img src="upload/'.$admin_profile.'" alt="'.@$admin_name.'" class="m--img-rounded m--marginless">';
													}else{
														echo'<img src="assets/user.png" alt="'.@$admin_name.'" class="m--img-rounded m--marginless">';
													} ?>
												</span>
												<span class="m-topbar__username m--hide"><?php echo @$admin_name; ?></span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(assets/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<?php if (!empty($admin_profile)) {
																	echo '<img src="upload/'.$admin_profile.'" alt="'.@$admin_name.'" class="m--img-rounded m--marginless">';
																}else{
																	echo'<img src="assets/user.png" alt="'.@$admin_name.'" class="m--img-rounded m--marginless">';
																} ?>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500"><?php echo @$admin_name; ?></span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link"><?php echo @$admin_email; ?></a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__item">
																	<a href="admin_profile.php" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="admin_setting.php" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">Setting</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<!-- <li id="m_quick_sidebar_toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
											</a>
										</li> -->
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="dashboard.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="joining_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Join Our Panel</span></span></span></a></li>
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="sales_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Contact Sales</span></span></span></a></li>
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="contact_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Contact Support</span></span></span></a></li>
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="newsletter_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Newsletter</span></span></span></a></li>

							<!-- <li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Section 1'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">Slider</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section11.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Slider 1</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section12.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Slider 2</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section13.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Slider 3</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section14.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Slider 4</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section15.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Slider 5</span></a></li>
									</ul>
								</div>
							</li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section2.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Video</span></span></span></a></li>
							
							<li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Section 3'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">About </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section31.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">3.1</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section32.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">3.2</span></a></li>
									</ul>
								</div>
							</li> -->
							
							<!-- <li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Section 4'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">Events</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section31.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">3.1 Header</span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section32.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">3.2 Events</span></a></li>
									</ul>
								</div>
							</li> -->

							<!-- <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section4.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Gallery</span></span></span></a></li>
							
							<li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Section 5'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">Menu</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section51.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">5.1 </span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section52.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">5.2 </span></a></li>
									</ul>
								</div>
							</li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section6.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Offer</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section7.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Instagram</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Section 8'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">Testimonial</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section81.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">8.1 </span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section82.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">8.2 </span></a></li>
									</ul>
								</div>
							</li>
							
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section9.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Host & Event</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="section10.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Map Location</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active m-menu__item--submenu <?php if($currentpage == 'Footer'){ echo 'm-menu__item--open';} ?> m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span
									 class="m-menu__link-text">Footer</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="footer1.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer 1 </span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="footer2.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer 2 </span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="footer3.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer 3 </span></a></li>
										<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="footer4.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Footer 4 </span></a></li>
									</ul>
								</div>
							</li> -->
							
							<!-- 
							<li class="m-menu__section ">
				                <h4 class="m-menu__section-text">Setting</h4>
				                <i class="m-menu__section-icon flaticon-more-v2"></i>
				            </li>

				            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="hospital.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Hospitals</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="health_auth.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Health Authority</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="police_service.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Police Force</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="police_bcu.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Police BCU</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="police_station.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Police Station</span></span></span></a></li>

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="author_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">MT </span></span></span></a></li> 

							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="user_list.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">SFR User </span></span></span></a></li>
							 -->
				            
							
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>