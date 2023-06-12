<?php 
$currentpage = 'Admin Login';
include('include/builders_hive_admin.php');
if(isset($_POST['submit'])){
    extract($_POST);
    $user = $admin->test_input($username);
	$otp = rand(1000, 10000);
      if (!empty($user)) {
          if(!$admin->checkUserEmailexist($user)){
            $id = uniqid();
            // $data = $user->runQuery(" UPDATE sfr_user set pass_verify = '$id' where user_email = '$user' ");
            ///////send forget_password link to email

            $message = '<div bgcolor="#f4f8fb" style="background-color:#f4f8fb;margin:0;padding:0;width:100%!important"><div class="adM">
                        </div><div style="font-size:1px;color:#f4f8fb;display:none;overflow:hidden"></div>

                        <table width="100%" bgcolor="#f4f8fb" style="background-color:#f4f8fb" border="0" cellpadding="0" cellspacing="0"><tbody>
                          <tr>
                          <td>
                            <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#f4f8fb" style="background-color:#f4f8fb;width:600px"><tbody><tr>
                              <td class="m_1180830658322787617web" align="right" style="color:#999999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px"> &nbsp; </td>
                            </tr></tbody></table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table class="m_1180830658322787617email-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;width:600px;"><tbody><tr>
                              <td>
                                <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0"  style="width:600px">
                                  <tbody>
                                    <tr>
                                      <td style="color:#ffffff;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:20px;line-height:24px;padding:30px 10px;" align="center">
                                        <a href="'.$web_url.'" target="_blank"><img class="m_1180830658322787617mobile-image CToWUd" src="'.$web_url.'assets/logo.png" alt="'.$web_title.'" width="150" height="auto" border="0" hspace="0" vspace="0" style="color:#000;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:20px;line-height:24px;display:block;vertical-align:top; width:100%;max-width:150px;"></a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0"  style="width:600px">
                                  <tbody>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" align="center" style="color:#000;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:25px;line-height:20px;padding-top:10px">Forgot Password</td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" align="center" style="color:#000;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:15px;line-height:20px;padding-top:30px"> 

                                      To reset your password, please click below:

                                      </td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td align="center" style="color:#1473e6;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:16px;line-height:20px;padding-top:30px;padding-bottom:40px">
                                      <div>
                                      <a class="m_1180830658322787617button" href="'.$web_url."reset_password.php?reset=".$id.'" style="background-color:#1473e6;border-radius:16px;color:#ffffff;display:inline-block;font-size:16px;line-height:32px;text-align:center;text-decoration:none;width:208px" target="_blank" ><strong>Click here</strong></a>
                                      </div>
                                      </td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" align="center" style="color:#ffffff;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:15px;line-height:20px;padding-top:30px"> 

                                      We hope to see you again soon.

                                      </td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                    
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" valign="top" align="center" style="color:#ffffff;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:10px;padding-bottom:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                          </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#f4f8fb" style="background-color:#f4f8fb;width:600px"><tbody><tr>
                              <td class="m_1180830658322787617web" align="right" style="color:#999999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px"> &nbsp; </td>
                            </tr></tbody></table>
                          </td>
                        </tr>
                      </tbody>
                      </table>
                      </div>';

            $subject= 'Forget Password Mail - '.$web_title;
            $body =  $message; 
            // $data = 'emailid='.$uemail.'&contents='.$body;
            $data = json_encode(array("emailid" =>$user, "contents"=>$body, "subject"=>$subject));
            // echo $data;
            // ************* Call API:
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://solaapp.ap-south-1.elasticbeanstalk.com/Emailer/webresources/emailer/sendSfrEmail");
            curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);   // post data
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            curl_close ($ch);
            
            // returned json string will look like this: {"code":1,"data":"OK"}
            // "code" may contain an error code and "data" may contain error string instead of "OK"
            $obj = json_decode($json);
            
            // print_r($json); 
            
            if ($obj->{'status'} == 'success')
            {   
                
               $admin->runQuery(" UPDATE sfr_user set pass_verify = '$id' where user_email = '$user' ");
               $result = "<span style='color:green;'>Check your email for reset password link.</span>";
              
            }else{
              $result = "Something went wrong, plz try after sometime !!!.";
            }
            
          }
          else
          { 
            $result = "Email not registered.";
          }
      }
      else
      { 
        $result = "All fields are required!!!.";
      } 
          

    // echo $result;
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
    <link rel="shortcut icon" href="../upload/<?php echo $favicon; ?>" />
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
								<img src="assets/logo.png" width="150px">
								
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgot Password</h3>
							</div>
							
							<form class="m-login__form m-form" action="" method="post" id="admin_login">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="email" placeholder="Email" name="username" value="" required="" >
								</div>
								<div class="m-login__form-action">
									<button type="submit" name="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn--primary">Submit</button>
									<br> 
									<?php if (isset($result)) { ?>
										<br><br> <span id="spin" style="color: red;"><?php echo @$result;?></span>
									<?php }  ?>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="register.php" id="" class="m-link m-link--light m-login__account-link">Sign Up</a><br>
							<span class="m-login__account-msg">
								Already have an account ?
							</span>&nbsp;&nbsp;
							<a href="index.php" id="" class="m-link m-link--light m-login__account-link">Sign In</a>
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
		
	</body>

	<!-- end::Body -->
</html>