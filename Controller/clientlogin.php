<?php
	session_start();
	require_once('../Model/usermodel.php');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		if($name == "" || $password == "")
		{
			echo "Null submission";
		}
		else
		{
			
			$result = validateUser($name, $password);
			if($result)
			{
				header('location: ../View/clienthome.php');
			}
			else
			{
				echo "Invalid User";
			}
			

		}
	}
?>