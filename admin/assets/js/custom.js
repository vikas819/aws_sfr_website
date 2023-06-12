
/////////////////////////////////////////////////////////////////////////////////
///////////////////////Alert Notification ////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
    function errorWarning(title,text){ 
  			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-top-right",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "5000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			};

			toastr.warning(text, title);
            return false;
	}
	function errorDanger(title,text){ 
  			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-top-right",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "5000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			};

			toastr.error(text, title);
            return false;
	}
	function errorSuccess(title,text){ 
  			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-top-right",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "5000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			};

			toastr.success(text, title);
            return false;
	}
	function errorInfo(title,text){ 
  			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-top-right",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "5000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			};

			toastr.info(text, title);
            return false;
	}

	function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;

         document.body.innerHTML = printContents;

         window.print();

         document.body.innerHTML = originalContents;
    }

    function readURL(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#blah').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	function readURL_1(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#blah_1').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	function readURL_2(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#blah_2').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	function readURL_3(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#blah_3').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	function readURL_4(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#blah_4').attr('src', e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	function ConfirmDelete(){
	  var x = confirm("Are you sure you want to delete?");
	  if (x){
	      return true;
	  }
	  else{
	  	return false;
	  }
	}

// (function($) {
//   $.fn.inputFilter = function(inputFilter) {
//     return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
//       if (inputFilter(this.value)) {
//         this.oldValue = this.value;
//         this.oldSelectionStart = this.selectionStart;
//         this.oldSelectionEnd = this.selectionEnd;
//       } else if (this.hasOwnProperty("oldValue")) {
//         this.value = this.oldValue;
//         this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
//       }
//     });
//   };
// }(jQuery));


// // Install input filters.
// $("#uintTextBox").inputFilter(function(value) {
//   return /^\d*$/.test(value); });
// $("#intLimitTextBox").inputFilter(function(value) {
//   return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
// $("#intTextBox").inputFilter(function(value) {
//   return /^-?\d*$/.test(value); });
// $("#floatTextBox").inputFilter(function(value) {
//   return /^-?\d*[.,]?\d*$/.test(value); });
// $("#currencyTextBox").inputFilter(function(value) {
//   return /^-?\d*[.,]?\d{0,2}$/.test(value); });
// $("#basicLatinTextBox").inputFilter(function(value) {
//   return /^[a-z]*$/i.test(value); });
// $("#extendedLatinTextBox").inputFilter(function(value) {
//   return /^[a-z\u00c0-\u024f]*$/i.test(value); });
// $("#hexTextBox").inputFilter(function(value) {
//   return /^[0-9a-f]*$/i.test(value); });


////////////////Add Comment police_request_detail 
    // $(document).ready(function(){
    //     $("#showcommentbox").click(function(){
    //         $("#commentbox").toggle('slow');
    //     });
    // });
    // $(document).ready(function(){
    //     $("#showinput").click(function(){
    //         $("#tromaname").toggle('slow');
    //     });
    // });
////////////////Add more treatment location deatil doctor_request_edit.php
// $(document).ready(function(){
//     var maxField = 20; //Input fields increment limitation
//     var addButton = $('.add_button'); //Add button selector
//     var wrapper = $('.field_wrapper'); //Input field wrapper
//     var fieldHTML = '<div class="m-form__group form-group row"><div class="col-md-4" ><label>On/between date </label><input type="text" class="form-control m-input" placeholder="Select date and time" id="m_datetimepicker_5" name="from_time[]" value="" /><span class="m-form__help"></span></div><div class="col-md-4" ><label>To:</label><input type="text" class="form-control m-input" placeholder="Select date and time" id="m_datetimepicker_5" name="from_to[]" value="" /><span class="m-form__help"></span></div><div class="col-md-4" ><label>Location</label><input type="text"  id="" name="from_location[]" class="form-control m-input" value="" ><span class="m-form__help"></span></div><div class="col-md-4" ><label>Medical Examiner </label><input type="text"  id="" name="medical_examin[]" class="form-control m-input" value="" ><span class="m-form__help"></span></div><div class="col-md-4" ><label>Remark:</label><input type="text"  id="" name="doctor_remark[]" class="form-control m-input" value="" ><span class="m-form__help"></span></div><div class="col-md-4" ><label for="example-text-input">Upload Report</label><input class="form-control m-input" type="file" name="doctor_uploadreport[]" multiple="" accept="image/*, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"><span class="m-form__help">File format : .jpg, .jpeg, .png, .pdf, .docx are accepted only.</span><span class="m-form__help"></span></div><div class="col-md-4" ><button type="button" class="m--margin-top-30 btn btn-sm btn-danger remove_button">Remove</button></div></div>'; //New input field html 
//     var x = 1; //Initial field counter is 1
    
//     //Once add button is clicked
//     $(addButton).click(function(){
//         //Check maximum number of input fields
//         if(x < maxField){ 
//             x++; //Increment field counter
//             $(wrapper).append(fieldHTML); //Add field html
//         }
//     });
    
//     //Once remove button is clicked
//     $(wrapper).on('click', '.remove_button', function(e){
//         e.preventDefault();
//         $(this).closest('div.row').remove(); //Remove field html
//         x--; //Decrement field counter
//     });
// });