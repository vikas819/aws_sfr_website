<?php
class builders_hive_users extends builders_hive
{
	public function is_loggedin()
	{
		if(isset($_SESSION['bh_user_id']) and isset($_SESSION['bh_user_type']))
		{
			return true;
		}
	}

	public function doUserLogout()
	{	
		unset($_SESSION['bh_user_id']);
		unset($_SESSION['bh_user_type']);
		session_destroy();
		return true;
	}

	public function doArchitectRegister($id, $ufname, $ulname, $ucontact, $ucompany, $uemail, $upass, $date_time){
		try
		{	$user_profile="";
			$verify = $status=1;
			$type='architect';
			
			// (`uid`, `user_id`, `user_fname`, `user_lname`, `user_company`, `user_contact`, `user_website`, `user_address`, `user_pincode`, `user_email`, `user_pass`, `user_type`, `email_verified`, `pass_verified`, `user_profile`, `user_status`, `user_createdon`
			$stmt = $this->conn->prepare("INSERT INTO `bh_user_master` (`user_id`, `user_fname`, `user_lname`, `user_company`, `user_contact`, `user_email`, `user_pass`, `user_type`, `email_verified`, `pass_verified`, `user_status`, `user_createdon`) VALUES (:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10,:a11,:a12)");
												  
			$stmt->bindparam(":a1", $id);
			$stmt->bindparam(":a2", $ufname);								  
			$stmt->bindparam(":a3", $ulname);								  
			$stmt->bindparam(":a4", $ucompany);								  
			$stmt->bindparam(":a5", $ucontact);								  
			$stmt->bindparam(":a6", $uemail);								  
			$stmt->bindparam(":a7", $this->convert_string('encrypt',$upass));								  
			$stmt->bindparam(":a8", $type);								  
			$stmt->bindparam(":a9", $verify);								  
			$stmt->bindparam(":a10", $verify);								  
			$stmt->bindparam(":a11", $status);								  
			$stmt->bindparam(":a12", $date_time);						  
				
			$stmt->execute();	
			
			return $stmt;
	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function doUserRegister($id, $ufname, $ulname, $ucontact, $uemail, $upass, $date_time){
		try
		{	$user_profile="";
			$verify = $status=1;
			$type='user';
			
			// `uid`, `user_id`, `user_name`, `user_company`, `user_email`, `user_pass`, `user_type`, `email_verified`, `pass_verified`, `user_status`, `user_createdon`
			$stmt = $this->conn->prepare("INSERT INTO `bh_user_master` (`user_id`, `user_lname`, `user_lname`, `user_contact`, `user_email`, `user_pass`, `user_type`, `email_verified`, `pass_verified`, `user_status`, `user_createdon`) VALUES (:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10,:a11)");
												  
			$stmt->bindparam(":a1", $id);
			$stmt->bindparam(":a2", $ufname);									  
			$stmt->bindparam(":a3", $ulname);									  
			$stmt->bindparam(":a4", $ucontact);									  
			$stmt->bindparam(":a5", $uemail);								  
			$stmt->bindparam(":a6", $this->convert_string('encrypt',$upass));								  
			$stmt->bindparam(":a7", $type);								  
			$stmt->bindparam(":a8", $verify);								  
			$stmt->bindparam(":a9", $verify);								  
			$stmt->bindparam(":a10", $status);								  
			$stmt->bindparam(":a11", $date_time);						  
				
			$stmt->execute();	
			
			return $stmt;
	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function doUserlogin($uemail,$upass,$utype)
	{
		try
		{	
			$email_verify = '1';
			$user_status = '1';
			$stmt = $this->conn->prepare(" SELECT * FROM bh_user_master WHERE user_email=:umail AND user_pass=:upass AND user_type=:type AND email_verified=:verify AND user_type =:type AND user_status=:status ");
			$stmt->execute(array(':umail'=>$uemail, ':upass'=>$this->convert_string('encrypt',$upass), ':type'=>$utype, ':verify'=>$email_verify, ':status'=>$user_status));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
					$_SESSION['bh_user_id'] = $userRow['user_id'];
					$_SESSION['bh_user_type'] = $userRow['user_type'];
					// if ($remember == 1) {
					// 	setcookie('bh_user_id',$_SESSION['bh_user_id'], time() + 60*60*24*365 );
					// 	setcookie('bh_user_type',$_SESSION['bh_user_type'], time() + 60*60*24*365 );
					// }
					return true;
			}
			else
			{
					return false;
			}
		}
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function checkUserEmailExist($user_email){
		try
		{	
			$stmt = $this->conn->prepare("SELECT * FROM `bh_user_master` WHERE user_email=:umail ");
			$stmt->execute(array(':umail'=>$user_email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() >= 1){
				return false;
			}else{
				return true;
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function updateUser_profile($id,$fname,$lname,$company,$email,$contact,$website,$address,$pincode,$profile_new){
		try
		{
			$stmt = $this->conn->prepare("UPDATE `bh_user_master` SET `user_fname`=:a2,`user_lname`=:a3,`user_company`=:a4,`user_contact`=:a5,`user_website`=:a6,`user_address`=:a7,`user_pincode`=:a8,`user_profile`=:a9 WHERE `user_id`=:a1");
												  
			$stmt->bindparam(":a1", $id);
			$stmt->bindparam(":a2", $fname);
			$stmt->bindparam(":a3", $lname);
			$stmt->bindparam(":a4", $company);										  
			$stmt->bindparam(":a5", $contact);						  
			$stmt->bindparam(":a6", $website);						  
			$stmt->bindparam(":a7", $address);					  
			$stmt->bindparam(":a8", $pincode);					  
			$stmt->bindparam(":a9", $profile_new);						  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function checkUser_oldpassword($id,$opass){
		try
		{	
			$stmt = $this->conn->prepare("SELECT * FROM `bh_user_master` WHERE user_id=:id and user_pass =:opass  ");
			$stmt->execute(array(':id'=>$id,':opass'=>$this->convert_string('encrypt',$opass)));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1){
				return true;
			}else{
				return false;
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function resetUser_password($id,$npass){
		try
		{
			$stmt = $this->conn->prepare("UPDATE `bh_user_master` SET `user_pass`=:b WHERE `user_id`=:a");
												  
			$stmt->bindparam(":a", $id);
			$stmt->bindparam(":b", $this->convert_string('encrypt',$npass));								  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////// Users ///////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

	

	public function checkUserdetailexist($user,$pass,$otp){
		try
		{	
		    $email_verify = '1';
			$user_type = 'user';
			$user_status = '1';
		    $pass = $this->convert_string('encrypt',$pass);
			$stmt = $this->conn->prepare("SELECT * FROM `bh_user_master` WHERE user_email=:umail AND user_pass=:upwd AND email_verify=:verify AND user_type =:type AND user_status=:status");
			$stmt->execute(array(':umail'=>$user, ':upwd'=>$pass, ':verify'=>$email_verify, ':type'=>$user_type, ':status'=>$user_status));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1){
			    $id = $userRow['user_id'];
			    $stmt_1 = $this->conn->prepare("UPDATE `bh_user_master` SET `otp_check`=:b WHERE `user_id`=:a");
    			$stmt_1->bindparam(":a", $id);
    			$stmt_1->bindparam(":b", $otp);	
    			$stmt_1->execute();
			    
				return true;
			}else{
				return false;
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function addEnquiry($id, $userid, $project, $building, $size, $postcode, $budgetfrom, $budgetto, $comment, $task, $date_time){
		try
		{	
			$status=1;
			$approval = 0;
			$stmt = $this->conn->prepare("INSERT INTO `bh_enquiry_master`( `enq_id`, `enq_project`, `enq_building`, `enq_size`, `enq_room`, `enq_floor`, `enq_budgetfrom`, `enq_budgetto`, `enq_task`, `enq_user`, `enq_approval`, `enq_date`, `enq_status`) VALUES (:a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :a13)");
												  
			$stmt->bindparam(":a1", $id);
			$stmt->bindparam(":a2", $project);
			$stmt->bindparam(":a3", $building);								  
			$stmt->bindparam(":a4", $size);								  
			$stmt->bindparam(":a5", $room);								  
			$stmt->bindparam(":a6", $floor);								  
			$stmt->bindparam(":a7", $budgetfrom);								  
			$stmt->bindparam(":a8", $budgetto);								  
			$stmt->bindparam(":a9", $task);								  
			$stmt->bindparam(":a10", $userid);							  
			$stmt->bindparam(":a11", $approval);								  
			$stmt->bindparam(":a12", $date_time);								  
			$stmt->bindparam(":a13", $status);					  
				
			$stmt->execute();	

			// $id = $stmt->lastInsertId();
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function SubmitArchitectReview($reviewid, $review1, $review2, $review3, $review4, $date_time){
		try
		{	
			$status=1;
			$approval = 0;
			$stmt = $this->conn->prepare("UPDATE bh_enquiry_review SET `rev_date`=:a3,`review1`=:a4,`review2`=:a5,`review3`=:a6,`review4`=:a7 WHERE `review_id`=:a1 and `rev_status`=:a2 ");  
			$stmt->bindparam(":a1", $reviewid);
			$stmt->bindparam(":a2", $status);
			$stmt->bindparam(":a3", $date_time);
			$stmt->bindparam(":a4", $review1);								  
			$stmt->bindparam(":a5", $review2);								  
			$stmt->bindparam(":a6", $review3);								  
			$stmt->bindparam(":a7", $review4);	
			$stmt->execute();	
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	


	
	
}
 ?>