<?php $currentpage = "enquiry";
include('include/sfrmedical_admin.php');


if (isset($_GET['contact_enquiry_list'])) {
	$data = array();
	$draw = $_POST['draw'];
	$row = $_POST['start'];
	$rowperpage = $_POST['length']; // Rows display per page
	$columnIndex = $_POST['order'][0]['column']; // Column index
	$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
	$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
	$searchValue = $_POST['search']['value']; // Search value
	## Search 
	$searchQuery = " ";
	if($searchValue != ''){
		$searchQuery = " and (contact_name like '%".$searchValue."%' OR contact_email like '%".$searchValue."%' OR contact_phone like '%".$searchValue."%' OR contact_subject like '%".$searchValue."%' ) ";
	}

	## Total number of records without filtering
	$totalRecords = $admin->get_data_count("SELECT cid from sfr_contact_master WHERE status = 0 ");

	## Total number of records with filtering
	$totalRecordwithFilter = $admin->get_data_count("SELECT cid from sfr_contact_master WHERE  status = 0 ".$searchQuery);

	if ($totalRecords != 0 OR $totalRecordwithFilter != 0) {
	## Fetch records
		// echo $totalRecords;
		$empQuery = "SELECT cid, contact_id, contact_name, contact_email, contact_phone, contact_subject, contact_status, created_on from sfr_contact_master WHERE status = 0 ".$searchQuery." order by cid desc limit ".$row.",".$rowperpage;
		$empRecords = $admin->get_data_multiple($empQuery);
		$i = $_POST['start'] + 1;
		foreach ($empRecords as $key => $value) { 
			extract($value);
			if(!empty($created_on)){ $created_on = date('m-d-Y g:i A', strtotime($created_on));}else{$created_on = '-';}
			
			$data[] = array (
				"sno"=>$i++,
				"cid"=>$cid,
				"contact_id"=>$contact_id,
				"contact_name"=>$contact_name,
				"contact_email"=>$contact_email,
				"contact_phone"=>$contact_phone,
				"contact_subject"=>$contact_subject,
				"contact_status"=>$contact_status,
				"created_on"=>$created_on,
			);
		}
		## Response
		$response = array(
		    "draw" => intval($draw),
		    "iTotalRecords" => $totalRecords,
		    "iTotalDisplayRecords" => $totalRecordwithFilter,
		    "aaData" => $data
		);
	}else{
		$response = array(
		    "draw" => 1,
		    "iTotalRecords" => 0,
		    "iTotalDisplayRecords" => 0,
		    "aaData" => []
		);
	}
	echo json_encode($response);
	exit();
}


if (isset($_GET['joining_enquiry_list'])) {
	$data = array();
	$draw = $_POST['draw'];
	$row = $_POST['start'];
	$rowperpage = $_POST['length']; // Rows display per page
	$columnIndex = $_POST['order'][0]['column']; // Column index
	$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
	$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
	$searchValue = $_POST['search']['value']; // Search value
	## Search 
	$searchQuery = " ";
	if($searchValue != ''){
		$searchQuery = " and (joining_fname like '%".$searchValue."%' OR joining_lname like '%".$searchValue."%' OR joining_email like '%".$searchValue."%' OR joining_phone like '%".$searchValue."%' OR joining_subject like '%".$searchValue."%' ) ";
	}

	## Total number of records without filtering
	$totalRecords = $admin->get_data_count("SELECT jid from sfr_joining_master WHERE  status = 0 ");

	## Total number of records with filtering
	$totalRecordwithFilter = $admin->get_data_count("SELECT jid from sfr_joining_master WHERE  status = 0 ".$searchQuery);

	if ($totalRecords != 0 OR $totalRecordwithFilter != 0) {
	## Fetch records
		// echo $totalRecords;
		$empQuery = "SELECT jid, joining_id, joining_fname, joining_lname, joining_email, joining_phone, joining_subject, joining_workarea, joining_status, created_on from sfr_joining_master WHERE  status = 0 ".$searchQuery." order by jid desc limit ".$row.",".$rowperpage;
		$empRecords = $admin->get_data_multiple($empQuery);
		$i = $_POST['start'] + 1;
		foreach ($empRecords as $key => $value) { 
			extract($value);
			if(!empty($created_on)){ $created_on = date('m-d-Y g:i A', strtotime($created_on));}else{$created_on = '-';}
			$joining_name = ucfirst($joining_fname) ." ".$joining_lname;
			$data[] = array (
				"sno"=>$i++,
				"jid"=>$jid,
				"joining_id"=>$joining_id,
				"joining_name"=>$joining_name,
				"joining_email"=>$joining_email,
				"joining_phone"=>$joining_phone,
				"joining_subject"=>$joining_subject,
				"joining_workarea"=>$joining_workarea,
				"joining_status"=>$joining_status,
				"created_on"=>$created_on,
			);
		}
		## Response
		$response = array(
		    "draw" => intval($draw),
		    "iTotalRecords" => $totalRecords,
		    "iTotalDisplayRecords" => $totalRecordwithFilter,
		    "aaData" => $data
		);
	}else{
		$response = array(
		    "draw" => 1,
		    "iTotalRecords" => 0,
		    "iTotalDisplayRecords" => 0,
		    "aaData" => []
		);
	}
	echo json_encode($response);
	exit();
}


if (isset($_GET['sales_enquiry_list'])) {
    $data = array();
    $draw = $_POST['draw'];
    $row = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
    $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
    $searchValue = $_POST['search']['value']; // Search value
    ## Search 
    $searchQuery = " ";
    if($searchValue != ''){
        $searchQuery = " and (sales_fname like '%".$searchValue."%' OR sales_lname like '%".$searchValue."%' OR sales_email like '%".$searchValue."%' OR sales_phone like '%".$searchValue."%' OR sales_product like '%".$searchValue."%' ) ";
    }

    ## Total number of records without filtering
    $totalRecords = $admin->get_data_count("SELECT sid from sfr_sales_master WHERE  status = 0 ");

    ## Total number of records with filtering
    $totalRecordwithFilter = $admin->get_data_count("SELECT sid from sfr_sales_master WHERE  status = 0 ".$searchQuery);

    if ($totalRecords != 0 OR $totalRecordwithFilter != 0) {
    ## Fetch records
        // echo $totalRecords;
        $empQuery = "SELECT sid, sales_id, sales_fname, sales_lname, sales_email, sales_phone, sales_product, sales_status, created_on from sfr_sales_master WHERE  status = 0 ".$searchQuery." order by sid desc limit ".$row.",".$rowperpage;
        $empRecords = $admin->get_data_multiple($empQuery);
        $i = $_POST['start'] + 1;
        foreach ($empRecords as $key => $value) { 
            extract($value);
            if(!empty($created_on)){ $created_on = date('m-d-Y g:i A', strtotime($created_on));}else{$created_on = '-';}
            $sales_name = ucfirst($sales_fname) ." ".$sales_lname;
            $data[] = array (
                "sno"=>$i++,
                "sid"=>$sid,
                "sales_id"=>$sales_id,
                "sales_name"=>$sales_name,
                "sales_email"=>$sales_email,
                "sales_phone"=>$sales_phone,
                "sales_product"=>$sales_product,
                "sales_status"=>$sales_status,
                "created_on"=>$created_on,
            );
        }
        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );
    }else{
        $response = array(
            "draw" => 1,
            "iTotalRecords" => 0,
            "iTotalDisplayRecords" => 0,
            "aaData" => []
        );
    }
    echo json_encode($response);
    exit();
}


if (isset($_GET['newsletter_list'])) {
	$data = array();
	$draw = $_POST['draw'];
	$row = $_POST['start'];
	$rowperpage = $_POST['length']; // Rows display per page
	$columnIndex = $_POST['order'][0]['column']; // Column index
	$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
	$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
	$searchValue = $_POST['search']['value']; // Search value
	## Search 
	$searchQuery = " ";
	if($searchValue != ''){
		$searchQuery = " and ( news_email like '%".$searchValue."%' ) ";
	}

	## Total number of records without filtering
	$totalRecords = $admin->get_data_count("SELECT * from sfr_newsletter_master WHERE  status = 0 ");

	## Total number of records with filtering
	$totalRecordwithFilter = $admin->get_data_count("SELECT * from sfr_newsletter_master WHERE  status = 0 ".$searchQuery);

	if ($totalRecords != 0 OR $totalRecordwithFilter != 0) {
	## Fetch records
		// echo $totalRecords;
		$empQuery = "SELECT * from sfr_newsletter_master WHERE  status = 0 ".$searchQuery." order by nid desc limit ".$row.",".$rowperpage;
		$empRecords = $admin->get_data_multiple($empQuery);
		$i = $_POST['start'] + 1;
		foreach ($empRecords as $key => $value) { 
			extract($value);
			if(!empty($created_on)){ $created_on =  date('m-d-Y g:i A', strtotime($created_on));}else{$created_on = '-';}
			$data[] = array (
				"sno"=>$i++,
				"nid"=>$nid,
				"news_id"=>$news_id,
				"news_email"=>$news_email,
				"news_status"=>$news_status,
				"created_on"=>$created_on
			);
		}
		## Response
		$response = array(
		    "draw" => intval($draw),
		    "iTotalRecords" => $totalRecords,
		    "iTotalDisplayRecords" => $totalRecordwithFilter,
		    "aaData" => $data
		);
	}else{
		$response = array(
		    "draw" => 1,
		    "iTotalRecords" => 0,
		    "iTotalDisplayRecords" => 0,
		    "aaData" => []
		);
	}
	echo json_encode($response);
	exit();
}

?>