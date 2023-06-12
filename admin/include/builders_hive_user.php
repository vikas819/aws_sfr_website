<?php session_start();

$web_title   = 'SFR Medical';
$web_url     = 'https://localhost/expert/';
// $web_url ='https://zealcraft.in/builders-hive/';
require("class.phpmailer.php");
$mail = new PHPMailer();

include('class.builders_hive.php');
include('class.builders_hive_users.php');
$user = new builders_hive_users();

if (isset($_SESSION['bh_user_id'])) {
	$id = $_SESSION['bh_user_id'];
	$stmt = $user->get_data_single( "SELECT * FROM bh_user_master where user_id = '$id'" );
	extract($stmt);
	$user_name = $user_fname.'&nbsp;'.$user_lname;
	$per = 0;
	if (!empty($user_fname)) {
		$per = $per + 1;
	}
	if (!empty($user_company)) {
		$per = $per + 1;
	}
	if (!empty($user_contact)) {
		$per = $per + 1;
	}
	if (!empty($user_website)) {
		$per = $per + 1;
	}
	if (!empty($user_address)) {
		$per = $per + 1;
	}
	if (!empty($user_pincode)) {
		$per = $per + 1;
	}
	if (!empty($user_profile)) {
		$per = $per + 1;
	}
}

$stmtt = $user->get_data_single( "SELECT * FROM bh_setting_master where sid = '1'" );
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