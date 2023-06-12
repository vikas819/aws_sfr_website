<?php $page ="Join Our Panel";
include("meta_tags.php"); 
include("header.php"); ?>
		<section class="page-title p_relative pt_40 " style="background-color: #fff;">
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_30 lh_40 fw_medium">Join Our Panel</h1>
                    <hr>
                </div>
            </div>
        </section>
		<section class="event-details p_relative pb_40 ">
            <div class="auto-container">
                <div class="lower-content p_relative d_block shadow pr_20 pl_20 pt_30 pb_50">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                            <div class="content-box centred">
                                <h4 class="d_block fs_20 lh_34 fw_medium mb_35">If you would like to join our panel as an Expert, please fill the form below.</h4>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 form-column">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-12 form-column">
	                        <div class="form-inner">
	                            <form action="#" method="post" class="booking-form default-form" id="joining_form">
	                                <div class="row clearfix">
	                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
	                                        <input type="text" name="txt_fname" placeholder="First Name" required="">
	                                    </div>
	                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
	                                        <input type="text" name="txt_lname" placeholder="Last Name" required="">
	                                    </div>
	                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
	                                        <input type="email" name="txt_email" placeholder="Email" required="">
	                                    </div>
	                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
	                                        <input type="text" name="txt_contact" placeholder="Phone" required="">
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
	                                        <input type="text" name="txt_workarea" placeholder="Area of work" value="Application for expert witness" required="">
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
	                                        <input type="text" name="txt_subject" placeholder="Subject" value="" required="">
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
	                                    	<label>Please upload your CV*</label><br>
	                                        <input type="file" name="txt_attachement" placeholder="Please upload your CV*" value="" required=""><br><small> Doc type: pdf, doc, docx, jpeg, jpg, png.</small>
	                                    </div>
	                                    <div class="col-lg-12 col-md-6 col-sm-12 form-group mb_20">
	                                        <textarea name="message" name="txt_message" placeholder="Message"></textarea>
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
	                                    	<input type="hidden" name="txt_emailto" value="expert.witness@sfrmedical.com">
	                                        <button type="submit" class="theme-btn btn-two"><span>send a message</span></button>
	                                    </div>
	                                </div>
	                                <div class="row clearfix">
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
		                                	<div class="response-message text-center" style="color:green"></div>
	                                        <div class="contact_formErr text-center" style="color:red"></div>
	                                    </div>
                                    </div>
	                                <div class="row clearfix">
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
		                                	<p class="text-center" style="font-size: 13px;">You can also email <a href="mailto:expert.witness@sfrmedical.com">expert.witness@sfrmedical.com</a> and we’ll get back to you within one business day, <br> or talk to a member of our team Monday - Friday between 9:00 – 17:00 by calling <a href="tel:+441234943111">+44 1234 943 111</a></p>
	                                    </div>
                                    </div>
	                            </form>
	                        </div>
                    	</div>
                        
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php"); ?>
<script>
////////////////////////////// joining form
$("form#joining_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    // console.log(formData);
    $.ajax({
        url: 'mail_joining.php?id=joining_form',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            // $('#spin').fadeIn("slow").html('<p>Sending...</p>');
            $('form#joining_form').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            // $('#spin').fadeIn("slow").html('');
            $('form#joining_form').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            // console.log(aa);
            // alert(aa);
            if ( aa === "true" ){
                $('form#joining_form').find("input[type=text],input[type=email],input[type=file], textarea").val("");
                $('.response-message').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.response-message').fadeIn("slow").html(''); 
                }, 10000);
                $('.contact_formErr').fadeIn("slow").html('');
              // window.location = web_url+'home.php';
              // $("#cform")[0].reset();
            } else {
            //   $('.contact_formErr').fadeIn("slow").html('<div class="section-heading"><p class="response">Something went wrong, plz try after sometime !!!.</p></div>');
            //   setTimeout(function(){ 
            //         $('.contact_formErr').fadeIn("slow").html(''); 
            //     }, 10000);
                $('form#joining_form').find("input[type=text],input[type=email],input[type=file], textarea").val("");
                $('.response-message').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.response-message').fadeIn("slow").html(''); 
                }, 10000);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});
    
    </script>