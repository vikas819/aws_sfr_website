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
/////////////////////// Newsletter /////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

if(isset($_GET['i']) && $_GET['i'] =="newsletter"){
      $result = "";
      $web_title = "SFR Medical";
      $web_url = "https://sfrmedical.com/";
      $emailfrom = strtolower(test_input($_POST['txt_email']));
      if (!empty($emailfrom) ) {
        $uniqid = uniqid();
        date_default_timezone_set('Europe/London');
        $today = date('Y-m-d H:i:s');
        $count13 = $admin->get_data_count("SELECT `nid` FROM `sfr_newsletter_master` WHERE `news_email` = '$emailfrom' ");
        if ($count13 == 0) {
          $admin->runQuery("INSERT INTO `sfr_newsletter_master` (`news_id`, `news_email`, `created_on`) VALUES ( '$uniqid', '$emailfrom', '$today')");
        }else{ 
          $admin->runQuery("UPDATE `sfr_newsletter_master` SET `news_status` = 0 , `status` = 0 WHERE `news_email` = '$emailfrom' ");
        }
        $result = "true";  
        /////////////////////////////////////////////////////////////
        // $body = "Newsletter Email: ".$emailfrom;
        // $emailto = 'bhanu.mishra@nhs.net';
        // $subject = 'Newsletter email from SFR Medical website!';
        // $data = json_encode(array("emailid" =>$emailto, "contents"=>$body, "subject"=>$subject));
        //echo $data;
        //************* Call API:
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
        // if ($obj->{'status'} == 'success')
        // {
        //   $result = "true";
        // }else{
        //   $result = "false";
        // }
      }
      else
      { 
        $result = "Email field required!!!.";
      } 
    echo $result;
    exit();
}
?>