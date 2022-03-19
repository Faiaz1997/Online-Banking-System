<?php
	require_once('db.php');

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into registration values('', '{$user['name']}', '{$user['email']}', '{$user['address']}', '{$user['phone']}', '{$user['deposit']}', '{$user['gender']}', '{$user['dob']}', '{$user['password']}', '{$user['confirmpass']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function validateUser($name, $password)
	{
		$conn = getConnection();
		$sql = "select * from registration where Name='{$name}' and Pass='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result)>0){
			$_SESSION['status'] = true;
			$_SESSION['name'] = $row['Name'];
			$_SESSION['pass'] = $row['Pass'];
			$_SESSION['accno'] = $row['AccNo'];
			setcookie('status', 'true', time()+5000, '/');
			setcookie('name', $name, time()+3600, '/');
			setcookie('pass', $password, time()+3600, '/');
			return true;
		}
		else
		{
			return false;
		}
	}
	function validateCard($cardtype)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM card WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'" ;
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row['cardtype']!=$cardtype)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function reqCard($cardinfo){
		$conn = getConnection();
		$sql = "insert into card values('{$cardinfo['clientaccountno']}','{$cardinfo['name']}','{$cardinfo['cardtype']}','{$cardinfo['reqtype']}','')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function updateuserpass($userpass){
		$conn = getConnection();
		$sql = "update registration set Pass='{$userpass['pass']}', Repass='{$userpass['repass']}' WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>