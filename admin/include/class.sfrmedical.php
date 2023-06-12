<?php require_once('dbconfig.php');

class sfrmedical
{	

	protected $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function convert_string($action,$string) {
    	//// https://www.youtube.com/watch?v=chegnVgCl64
	   $output = '';
	   $encrypt_method = 'AES-256-CBC';
	   $secret_key = '0xd559817A265b5F90f92A9d947cd89D67ED78e94d';
	   $secret_iv = '0xd559817A265b5F90f92A9';
	   $key = hash('sha256', $secret_key);
	   $init_vector = substr(hash('sha256', $secret_iv), 0, 16);
	   if (!empty($string)) {
	   		if ($action == 'encrypt') {
	   			$output = openssl_encrypt($string, $encrypt_method, $key, 0, $init_vector);
	   			$output = base64_encode($output);
	   		}
	   		if ($action == 'decrypt') {
	   			$output = base64_decode($string);
	   			$output = openssl_decrypt($output, $encrypt_method, $key, 0, $init_vector);
	   		}
	   }
	   return $output;
	}
	
	public function get_client_ip() {
	    $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

	public function get_data_count($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		$row=$stmt->rowCount();
		return $row;
	}

	public function get_data_single($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $userRow;
	}

	public function get_data_multiple($stmt){
		$data = array();
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		while($userRow=$stmt->fetch(PDO::FETCH_ASSOC)){
			$data[] = $userRow;
		}
		return $data;
	}


	public function removeOldImage($data,$dir){
	/////delete Older image from directory.
		$dirHandle = opendir($dir);
	    while ($file = readdir($dirHandle)) {
		 if($file==$data) {
					unlink($dir.'/'.$file);
		 }
	    }
	    return true;
	}

	function dateDiffInDays($date1, $date2){ 
	    // Calulating the difference in timestamps 
	    $diff = strtotime($date2) - strtotime($date1); 
	    // 1 day = 24 hours 
	    // 24 * 60 * 60 = 86400 seconds 
	    return abs(round($diff / 86400)); 
	} 


	function dateDiffInMonths($date1, $date2){ 

        $ts1 = strtotime($date1);
        $ts2 = strtotime($date2);

        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);

        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);

        $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
	    return $diff;
	} 


	public function date_today(){date_default_timezone_set('Europe/London');
		$Today = date('Y-m-d H:i:s');
		
		// $new = date('j M Y', strtotime($Today)); //31 JUL 2018
		$new = date('m-d-Y g:i A', strtotime($Today));  //03-29-2023 23:03 PM
		// $new = date(' F d, Y', strtotime($Today));  //JULY 31, 2018
		return $new;

		// echo date_format($date, 'Y-m-d H:i:s');
		// #output: 2012-03-24 17:45:12

		// echo date_format($date, 'd/m/Y H:i:s');
		// #output: 24/03/2012 17:45:12

		// echo date_format($date, 'd/m/y');
		// #output: 24/03/12

		// echo date_format($date, 'g:i A');
		// #output: 5:45 PM

		// echo date_format($date, 'G:ia');
		// #output: 05:45pm

		// echo date_format($date, 'g:ia \o\n l jS F Y');
		// #output: 5:45pm on Saturday 24th March 2012
	}

	public function datetime($n)
	{
		date_default_timezone_set('Europe/London');
		if ($n == 1) {
			$date_time = date("Y-m-d H:i:s"); 
		} else if ($n == 2) {
			$date_time = date("h:i:s");
		} else if ($n == 3) {
			$date_time = date("d-m-y");
		} else if ($n == 4) {
			$date_time = date("H:i:s A");
		} else if ($n == 5) {
			$date_time = date("Y-m-d H:i:s"); 
		}else{
			$date_time ="";
		}
		return $date_time; 
	}

	
	public function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   //$data = mysql_real_escape_string($data);
	   $data = htmlspecialchars($data);
	   //$data = htmlentities($data);
	   $data = str_replace('"', "&quot;", $data);
	   $data = str_replace("'", "&#039;", $data);
	   return $data;
	}
	
	
	public function test_textarea($data) {
	   $data = str_replace('"', "&quot;", $data);
	   $data = str_replace("'", "&#039;", $data);
	   return $data;
	}

	
	public function redirect($url)
	{
		header("Location: $url");
	}



	
}
?>