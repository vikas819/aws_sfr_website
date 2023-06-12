<?php
include('admin/include/sfrmedical_admin.php');
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     //$data = mysql_real_escape_string($data);
     $data = htmlspecialchars($data);
     //$data = htmlentities($data);
     $data = str_replace("'", "&#039;", $data);
     $data = str_replace('"', "&quot;", $data);
     return $data;
}
  
  
function test_textarea($data) {
     $data = str_replace("'", "&#039;", $data);
     $data = str_replace('"', "&quot;", $data);
     return $data;
}

/////////////////////////////////////////////////////////////////////////////////
///////////////////////Contact form ////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

if(isset($_GET['id']) && $_GET['id'] =="contactform"){
      $result = "";
      $web_title = "SFR Medical";
      $web_url = "https://sfrmedical.com/";
      $name = test_input($_POST['txt_name']);
      $emailfrom = strtolower(test_input($_POST['txt_email']));
      $contact = test_input($_POST['txt_contact']);
      $subject1 = test_input($_POST['txt_subject']);
      $message = test_input($_POST['txt_message']);
      if (!empty($name) && !empty($emailfrom) ) {
        $uniqid = uniqid();
        date_default_timezone_set('Europe/London');
        $today = date('Y-m-d H:i:s');
        $admin->runQuery("INSERT INTO `sfr_contact_master`(`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_msg`, `created_on`) VALUES ( '$uniqid', '$name', '$emailfrom', '$contact', '$subject1', '$message', '$today')");
        $result = "true";  
        /////////////////////////////////////////////////////////////////
        //echo $subject1.' - From : '.$web_title.' website' ;
        // $body = '<div style="background-color:#f1f1f3!important;margin:0;padding:0;width:100%!important"><div class="adM"></div><div style="font-size:1px;color:#f1f1f3!important;display:none;overflow:hidden">Contact us</div><table width="100%" style="background-color:#f1f1f3!important" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#f1f1f3!important;width:600px"><tbody><tr><td class="m_1180830658322787617web" align="right" style="color:#999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px">&nbsp;</td></tr></tbody></table></td></tr><tr><td><table class="m_1180830658322787617email-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;width:600px;box-shadow:0 3px 40px rgba(2,6,32,.2)"><tbody><tr><td><table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="width:600px"><tbody><tr><td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td><td class="m_1180830658322787617mobile-text" align="left" style="color:#3a4583;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:15px;line-height:20px;padding-top:20px">From: '.ucfirst($name).'<br>Contact: '.$contact.'<br>Email: '.$emailfrom.'<br>Subject: '.$subject1.'<br>Message: '.$message.'<br><br></td><td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td></tr><tr><td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td><td class="m_1180830658322787617mobile-text" valign="top" align="left" style="color:#fff;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:10px;padding-bottom:30px">&nbsp;</td><td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td><table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#f1f1f3!important;width:600px"><tbody><tr><td class="m_1180830658322787617web" align="right" style="color:#999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px">&nbsp;</td></tr></tbody></table></td></tr></tbody></table></div>';
        // // $body = "Testing mail 01";
        // $emailto = 'bhanu.mishra@nhs.net';
        // $subject = 'Enquiry email from website!' ;
          
        // $data = json_encode(array("emailid" =>$emailto, "contents"=>$body, "subject"=>$subject));
        // echo $data;
        // ************* Call API:
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "https://emailer-380210.nw.r.appspot.com/webresources/emailer/sendEmailViaMS");
        // curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);   // post data
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $json = curl_exec($ch);
        // curl_close ($ch);
        // //returned json string will look like this: {"code":1,"data":"OK"}
        // //"code" may contain an error code and "data" may contain error string instead of "OK"
        // $obj = json_decode($json);
        // print_r($json); 
        // $result = "true";
        // if ($obj->{'status'} == 'success')
        // {
        //   $result = "true";  
        // }else{
        //   $result = "false";
        // }
        // header("Location: https://sfrmedical.com/contact-us");
      }
      else
      { 
        $result = "All fields are required!!!.";
      } 
    echo $result;
    exit();
}