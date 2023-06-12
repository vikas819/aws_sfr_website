<?php 
include('include/sfrmedical_admin.php');

$admin->doLogout();
// echo $web_url;
// session not set redirects to login page
$admin->redirect('index.php');
	