<?php
	session_start();
	require_once('../Model/usermodel.php');
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
		$cardtype= $_POST['cardtype'];
		$reqtype= $_POST['reqtype'];
		

        if($name == '' || $clientaccountno  == '' || $cardtype == '' || $reqtype == ''  )
        {
            echo "Null Submission<br>";
			$errorflag=true;
        }
		else
		{
			$clientaccflag=false;
	
			for($i=0;$i<strlen($clientaccountno);$i++)
			{
				if(($clientaccountno[$i] >= 0 ) && ($clientaccountno[$i] <= 9 ))
				{
						$clientaccflag=true;				         
				}
			}
			if($clientaccflag == false)
			{
				echo 'Invalid Account Number Format<br>';
				$errorflag=true;
			}

			if($clientaccountno != ($_SESSION['accno']))
			{
				echo 'Account no does not match <br>';
				$errorflag=true;
			}
			if($name != ($_SESSION['name']))
			{
				echo 'Account name does not match <br>';
				$errorflag=true;
			}

		}
		if(($errorflag == false))
		{
			$validatecard = validateCard($cardtype);
			if($validatecard)
			{
				$cardinfo = [
					'name'	=>$name, 
					'clientaccountno'	=>$clientaccountno,
					'cardtype'=>$cardtype,
					'reqtype'	=>$reqtype
	
				];
				$result = reqCard($cardinfo);
				if($result)
					{
						header('location: ../View/clientcard.php');
					}
				else
				{
					echo "something wrong...";
				}
			}
			else
			{
				echo "something wrong...";
			}
		}
	}

?>
