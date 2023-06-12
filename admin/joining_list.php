<?php $currentpage = 'Join Our Panel';
include('include/sfrmedical_admin.php');	
if (isset($_GET['k']) and !empty($_GET['k'])) {
	$id = $_GET['k'];
	$admin->runQuery("UPDATE `sfr_joining_master` SET `status`= 1 WHERE jid = '$id' ");
	$admin->redirect('joining_list.php?deleted');
}	
include('header.php');?>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-lg-12">
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Join Our Panel
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<!-- <ul class="m-portlet__nav">
												<li class="m-portlet__nav-item">
													<a href="report_sfr1_add.php" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air">
														<span>
															<i class="la la-plus"></i>
															<span>Add New Report</span>
														</span>
													</a>
												</li>
												<li class="m-portlet__nav-item">
													<a href="report_sfr1_export.php?report_sfr1_list=<?php echo @$d;?>" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air">
														<span>
															<i class="la la-download"></i>
															<span>Export to Excel</span>
														</span>
													</a>
												</li>
											</ul> -->
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="table-responsive">
										    <!--begin: Datatable -->
    										<table id="example" class="table table-striped- table-bordered table-hover table-checkable" >
    											<thead>
    												<tr>
    													<th>Sno</th>
    													<th>Name</th>
    													<th>Email</th>
				                                        <th>Phone</th>
				                                        <th>Subject</th>
				                                        <th>Work Area</th>
				                                        <th>Created on</th>
				                                        <th>Action</th>
    												</tr>
    											</thead>
    											<tbody id="show_data"></tbody>
    										</table>
    									</div>
									</div>
										
								</div>
							</div>
						</div>
						<!--End::Section-->
					</div>
				</div>
<?php include('footer.php');?>

<script>
$(document).ready(function(){
	$('#example').DataTable({
		"language": {
	        "infoEmpty": "",
	        "search": "Search"
	    },
	    'processing': true,
	    'serverSide': true,
	    'serverMethod': 'post',
	    'ajax': {
	        'url':'ajax_data.php?joining_enquiry_list'
	    },
	    "columns": [{	
        	data:"joining_status",
            'sortable': false,
            'searchable': false,
            "width": "50",
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.sno+'</b>';
            	}else{
            		return full.sno;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.joining_name+'</b>';
            	}else{
            		return full.joining_name;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.joining_email+'</b>';
            	}else{
            		return full.joining_email;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.joining_phone+'</b>';
            	}else{
            		return full.joining_phone;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.joining_subject+'</b>';
            	}else{
            		return full.joining_subject;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.joining_workarea+'</b>';
            	}else{
            		return full.joining_workarea;
            	}
		    }
        }
	    , {	
        	data:"joining_status",
            'sortable': false,
            'searchable': true,
		    "render":function(data, type, full){
		       if (full.joining_status === '0') {
            		return '<b>'+full.created_on+'</b>';
            	}else{
            		return full.created_on;
            	}
		    }
        }
	    , {
	        data: "jid",
	        'sortable': false,
	        'searchable': false,
	        'width': "80",
	        'render': function(data, type, full){
	            return '<span style="overflow: visible; position: relative; width: 110px;"><a href="joining_detail.php?i='+full.jid+'" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill" title="View "><i class="la la-eye"></i></a><a href="?k='+full.jid+'" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete " onclick="return ConfirmDelete()"><i class="la la-trash"></i></a></span>';
	        }
	    }]
	});
});

	

		<?php if (isset($_GET['success'])) { ?>
		$(document).ready(function () {
			errorSuccess('Success','Enquery added Successfully!!');
		});
		<?php }if (isset($_GET['updated'])) { ?>
		$(document).ready(function () {
			errorSuccess('Success','Enquery updated Successfully!!');
		});
		<?php }if (isset($_GET['deleted'])) { ?>
		$(document).ready(function () {
			errorSuccess('Success','Enquery deleted Successfully!!');
		});
		<?php } ?>
</script>