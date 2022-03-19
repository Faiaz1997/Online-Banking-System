<?php
	session_start();
	require_once('../Model/transactionmodel.php');
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
		$withdrawammount = $_POST['withdrawammount'];
        $password = $_POST['password'];

        if($name == '' || $clientaccountno == '' || $withdrawammount == '' || $password == '' )
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

            $withdrawammountflag=false;
	
			for($i=0;$i<strlen($withdrawammount);$i++)
			{
				if(($withdrawammount[$i] >= 0 ) && ($withdrawammount[$i] <= 9 ))
				{
                    $withdrawammountflag=true;				         
				}
			}
			if($withdrawammountflag == false)
			{
				echo 'Invalid Ammount Format<br>';
				$errorflag=true;
			}
			if($name!= ($_SESSION['name']))
			{
				echo 'Name does not match <br>';
				$errorflag=true;
			}
			if($password != ($_SESSION['pass']))
			{
				echo 'Password does not match <br>';
				$errorflag=true;
			}
			if($clientaccountno != ($_SESSION['accno']))
			{
				echo 'Account no does not match <br>';
				$errorflag=true;
			}


        }
        if(($errorflag == false))
		{
            $withdrawbalancecheck = withdrawbalancecheck($withdrawammount);
			if($withdrawbalancecheck)
			{
				$balanceupdate = withdraw($withdrawammount);
				$balance = $balanceupdate;
				if($balanceupdate)
				{
					$transaction = withdrawupdate($withdrawammount,$balance);
					if($transaction)
					{
						
						header('location: ../View/clientfundwithdraw.html');
					}
					else
					{
						echo "Something wrong...";
					}
				}
				else
				{
					echo "Something wrong...";
				}
				
			}
			else
			{
                echo "Insufficient Balance";
            }
			
			
		}



       
       
    }
?>