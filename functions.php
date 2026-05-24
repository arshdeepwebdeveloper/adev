 <?php
   /*require_once("image.class.php");
   require_once("file_function.php");*/
    function redirect($url=NULL){
    	   // redirect to a page
    	if($url!=NULL)
    	header("Location: {$url}");
		exit;
    	
    }
	
	function confirm_query($result){
		if(!$result){
			die("database query failed: ".mysqli_error());
		}
	}
	
	 function getPageName($pageName='home.php')	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if($parts[count($parts) - 1]==$pageName)
			echo  "class=\"active\"";
	
	}
	
	function getError($error){
		$errorMsg="";
		switch($error){
			case 1:
				$errorMsg .="<p class='alert alert-danger'><i class='fa fa-times'></i> Username / Password is incorrect";
				break;
			case 2:  // duplication
				$errorMsg .="<p class='alert alert-danger'>Record Already Exists error <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 3:
				$errorMsg .="<p class=\"info\">Please Select the appropriate Item";
				break;
			case 4:
				$errorMsg .="<p class=\"warning\">Please Enter the values";
				break;
			case 5:
				$errorMsg .="<p class='alert alert-danger'>Deleted Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button></p>";
				break;
			case 6:
				$errorMsg .="<p class=\"error\">Cannot Deleted";
				break;
			case 7:
				$errorMsg .="<p class='alert alert-info'> Update Successfully<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button>  </p>";
				break;
			case 8:
				$errorMsg .="<p class='alert alert-success'> Send Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		    	<span aria-hidden='true'>&times;</span></button> </p>";
				break;
			case 9:
				$errorMsg .="<p class=\"error\">Problem With file please upload file less then 900kb ";
				break;
			case 10:
			$errorMsg .="<h4 class='text-green'><i class='fa fa-check'></i> Logout Successfully </h4> ";
			break;
			case 11:
			$errorMsg .="<p class='text-red'><i class='fa fa-times'></i> File Size Problem </p> ";
			break;
			case 12:
			$errorMsg .="<script>alert('Send Successfully'); 
							window.location = 'index.php ';
			             </script> ";
			break;
			case 13:
			$errorMsg .="<script>alert('Error!'); 
						
			             </script> ";
			break;
			}

		
		$errorMsg .="</p>";
		
			return $errorMsg;
	}
	function mysql_prep($value){
		$magic_quotes_active=get_magic_quotes_gpc();
		$new_enough_php=function_exists("mysql_real_escape_string"); // i.e php >=4.3.0
		if($new_enough_php){
			
			if($magic_quotes_active){
				$value= stripslashes($value);
				
			}
			$value = mysql_real_escape_string($value);
			
		}
		else { //before php 4.3.0
			if(!$magic_quotes_active) {$value=addslashes($value);}
			
		}
		
		return $value;
	}

	////////////////////// super admin functions ////////////////////////////////////////
	
	function check_profile(){
		global $con;
		$query = "select * from superadmin";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		$rows = mysqli_num_rows($result);
		if($rows>0){
			return true;
		}
		else {
			return false;
		}
	}
	function create_super_admin($uname,$hpassword){
		global $con;
		$query = "INSERT INTO superadmin(uname, hpassword) VALUES ('$uname','$hpassword')";
		$result = mysqli_query($con,$query);
		confirm_query($result); 
		return true;
		
	}
	function login($uname, $hpassword, $type=1){
		global $con;
		$query = "SELECT * FROM ";
		switch($type){
			case 1:
				$query .="superadmin ";
			break;
				
		}
		$query .="WHERE uname='$uname' and hpassword='$hpassword' ";
		$query .="LIMIT 1";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		$num=mysqli_num_rows($result);
		if($num>0){
			
			return true;
		}
		else {
			return false;
		}	
	}
	function getBackground($pageName='index.php')	{
		$currentFile = $_SERVER["PHP_SELF"];
		$parts = Explode('/', $currentFile);
		if($parts[count($parts) - 1]==$pageName)
			echo  "class=\"page1\"";
		else {
			echo "class=\"page2\"";
		}
	
	}
	/*******************emp*************************/
	function verifyEmp($mob){
		global $con;
		$query= "SELECT * FROM ";
		$query .="registrations ";
		$query .="WHERE ";
		$query .=" mobile = '{$mob}'";
		$result = mysqli_query($con,$query);
		confirm_query($result);
		if($num=mysqli_num_rows($result)>0)
			return true;
		else 
			return false;
	}
function get_max_id($table_name){
		global $con;
		$query = "select max(id) as 'id' from ".$table_name;
		$result = mysqli_query($con,$query);
		confirm_query($result); 
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			if(is_null($row['id']))
				return 1;
			else 
				$unique_id =   $row['id'];
				$unique_id = intval($unique_id)+1;
				return $unique_id;
		}
	}
	
?>