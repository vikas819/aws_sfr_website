<?php session_start();

// $web_url = 'https://localhost/sfrweb/admin/';
$web_url ='http://3.11.155.50/admin';
require("class.phpmailer.php");
$mail = new PHPMailer();

include('class.sfrmedical.php');
include('class.sfrmedical_admin.php');
$admin = new sfrmedical_admin();

if (isset($currentpage) and $currentpage == 'Admin Login') {
	// session_regenerate_id(true);
	if($admin->is_loggedin())
	{
		// session set redirects to dashboard page
		$admin->redirect('dashboard.php');
	}
}else{
	// session_regenerate_id(false);
	if(!$admin->is_loggedin())
	{
		// session not set redirects to login page
		$admin->redirect($web_url);
	}
}

if (isset($_SESSION['sfr_admin_id'])) {
	$id = $_SESSION['sfr_admin_id'];
	$stmt = $admin->get_data_single( "SELECT * FROM sfr_admin_master where admin_id = '$id'" );
	extract($stmt);
}
	$stmtt = $admin->get_data_single( "SELECT * FROM sfr_setting_master where sid = '1'" );
	$web_title   = $stmtt['text1'];
	$web_keyword = $stmtt['text2'];
	$web_copy    = $stmtt['text3'];
	$web_desc    = $stmtt['text4'];
	$header_logo = $stmtt['text5'];
	$footer_logo = $stmtt['text6'];
	$favicon     = $stmtt['text7'];
	$fb     	 = $stmtt['text8'];
	$tw     	 = $stmtt['text9'];
	$ln     	 = $stmtt['text10'];

$currency = '£'; ///GBP
 ?>