<?php
	session_start();
    require_once('../Model/usermodel.php');
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
        $password = $_POST['password'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];
        

        if($name == '' || $clientaccountno == '' ||  $newpass == '' || $password == '' ||  $renewpass == ''  )
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
            $newpassflag=false;

            for($i=0;$i<strlen($newpass);$i++)
            {
                if(($newpass[$i] == '@' || 
                $newpass[$i] == '$' ||
                $newpass[$i] == '#' ||
                $newpass[$i] == '%')) 
                {
                    $newpassflag=true;
                }
            }

            if($newpassflag == false)
            {
                echo 'New Password must contain atleast one of the special characters (@, $, % or #!)<br>';
                $errorflag=true;
            }
            else if(strlen($newpass) < 4)
            {
                echo 'New Password must contain atleast 4 characters<br/>';
                $errorflag=true;
            }

            if($newpass != $renewpass)
            {
                echo "Confirmed password does't match with password<br>";
                $errorflag=true;
            }
            $renewpassflag=false;

            for($i=0;$i<strlen($renewpass);$i++)
            {
                if(($renewpass[$i] == '@' || 
                $renewpass[$i] == '$' ||
                $renewpass[$i] == '#' ||
                $renewpass[$i] == '%')) 
                {
                    $renewpassflag=true;
                }
            }

            if($renewpassflag == false)
            {
                echo 'Password can not be confirmed <br>';
                $errorflag=true;
            }
            if(strlen($renewpass) < 4)
            {
                echo 'Password can not be confirmed <br/>';
                $errorflag=true;
            }

            if($newpass != $renewpass)
            {
                echo "Password can not be confirmed <br>";
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
            
            $userpass = [
                'pass' =>$newpass,
                'repass'=>$renewpass
			];

            $result = updateuserpass($userpass);

            if($result)
            {
                header('location: ../View/clientlogin.html');
            }
            else{
                echo "Something wrong...";
            }
        }
			
        else
        {
            echo "invalid Request";
        }
		
    }

?>