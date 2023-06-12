<?php
class sfrmedical_admin extends sfrmedical
{
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////// Users ///////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function is_loggedin()
	{
		if(isset($_SESSION['sfr_admin_id']) and isset($_SESSION['sfr_admin_type']) and $_SESSION['sfr_admin_type'] == 'admin')
		{
			return true;
		}
	}

	public function doLogout()
	{	
		unset($_SESSION['sfr_admin_id']);
		unset($_SESSION['sfr_admin_type']);
		session_destroy();
		return true;
	}

	

	public function doAdminlogin($user,$pass)
	{
		try
		{	
			$admin_status = '1';
			$stmt = $this->conn->prepare(" SELECT * FROM sfr_admin_master WHERE admin_email=:umail AND admin_pass=:upass AND  admin_status=:status ");
			$stmt->execute(array(':umail'=>$user, ':upass'=>$this->convert_string('encrypt',$pass), ':status'=>$admin_status));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
					$_SESSION['sfr_admin_id'] = $userRow['admin_id'];
					$_SESSION['sfr_admin_type'] = 'admin';
					// if ($remember == 1) {
					// 	setcookie('bh_admin_id',$_SESSION['bh_admin_id'], time() + 60*60*24*365 );
					// 	setcookie('bh_admin_type',$_SESSION['bh_admin_type'], time() + 60*60*24*365 );
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

	public function updateAdmin_profile($id,$admin_name,$admin_email,$admin_profile_new){
		try
		{
			$stmt = $this->conn->prepare("UPDATE `sfr_admin_master` SET `admin_name`=:b,`admin_email`=:c,`admin_profile`=:d WHERE `admin_id`=:a");
												  
			$stmt->bindparam(":a", $id);
			$stmt->bindparam(":b", $admin_name);
			$stmt->bindparam(":c", $admin_email);										  
			$stmt->bindparam(":d", $admin_profile_new);						  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	} 

	public function checkAdmin_oldpassword($id,$opass){
		try
		{	
			$stmt = $this->conn->prepare("SELECT * FROM `sfr_admin_master` WHERE admin_id=:id and admin_pass =:opass  ");
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

	public function resetAdmin_password($id,$npass){
		try
		{
			$stmt = $this->conn->prepare("UPDATE `sfr_admin_master` SET `admin_pass`=:b WHERE `admin_id`=:a");
												  
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


	public function checkUserEmailexist($admin_email){
		try
		{	
			$stmt = $this->conn->prepare("SELECT * FROM `sfr_admin_master` WHERE admin_email=:umail ");
			$stmt->execute(array(':umail'=>$admin_email));
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


	public function updateadmin_setting($web_title,$web_keyword,$web_copy,$web_desc,$post_image1,$post_image2,$post_image3,$fb,$tw,$ln){
		try
		{	
			$i=1;
			$stmt = $this->conn->prepare("UPDATE `sfr_setting_master` set text1 = :b, text2 = :c, text3 = :d, text4 = :e, text5 = :f, text6 = :g, text7 = :h, text8 = :i, text9 = :j, text10 = :k where sid = :a");
												  
			$stmt->bindparam(":a", $i);
			$stmt->bindparam(":b", $web_title);								  
			$stmt->bindparam(":c", $web_keyword);								  
			$stmt->bindparam(":d", $web_copy);						  
			$stmt->bindparam(":e", $web_desc);						  
			$stmt->bindparam(":f", $post_image1);						  
			$stmt->bindparam(":g", $post_image2);									  
			$stmt->bindparam(":h", $post_image3);						  
			$stmt->bindparam(":i", $fb);									  
			$stmt->bindparam(":j", $tw);						  
			$stmt->bindparam(":k", $ln);				  
			
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