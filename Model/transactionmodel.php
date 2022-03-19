<?php
	require_once('db.php');

	function withdrawbalancecheck($withdrawammount){
		$conn = getConnection();
		$sql = "SELECT * FROM registration WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'" ;
            $result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
		if($row['Deposit']>$withdrawammount){
			return true;
		}else{
			return false;
		}
	}
    function transferbalancecheck($transferammount){
		$conn = getConnection();
		$sql = "SELECT * FROM registration WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'" ;
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
        if($row['Deposit']>$transferammount){
			return true;
		}else{
			return false;
		}
	}
    function withdraw($withdrawammount)
    {
        $conn = getConnection();
        $sql = "UPDATE registration set Deposit= (Deposit-'$withdrawammount') WHERE Name = '{$_SESSION['name']}' 
        && AccNo = '{$_SESSION['accno']}'" ;
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM registration WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'" ;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);    
        return $row['Deposit'];

    }
    function transfer($transferammount,$receivername,$receiveraccno)
    {
        $conn = getConnection();
        $sql = "UPDATE registration set Deposit= (Deposit+'$transferammount') WHERE Name = '$receivername' && AccNo = '$receiveraccno'" ;
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM registration WHERE Name = '$receivername' && AccNo = '$receiveraccno'" ;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['Deposit'];
    }
    function withdrawupdate($withdrawammount,$balance)
    {
        $conn = getConnection();
        $sql = "INSERT INTO `transaction`(`AccNo`,`transactionId`, `senderid`, `receiverid`, `type`, `credit`, `debit`, `balance`) 
        VALUES ('{$_SESSION['accno']}',NULL, 'None','None','Withdraw','NULL','$withdrawammount','$balance')";
        $result = mysqli_query($conn, $sql);
        return true;
    }
    function transferupdate($transferammount,$balance1,$receiveraccno)
    {
        $conn = getConnection();
        $sql = "INSERT INTO `transaction`(`AccNo`,`transactionId`, `senderid`, `receiverid`, `type`, `credit`, `debit`, `balance`) 
        VALUES ('{$_SESSION['accno']}',NULL, '{$_SESSION['accno']}','$receiveraccno','Transfer','NULL','$transferammount','$balance1')";
        $result = mysqli_query($conn, $sql);
        return true;
    }
    function transactionupdate($transferammount,$balance2,$receiveraccno)
    {
        $conn = getConnection();
        $sql = "INSERT INTO `transaction`(`AccNo`,`transactionId`, `senderid`, `receiverid`, `type`, `credit`, `debit`, `balance`) 
        VALUES ('$receiveraccno',NULL, '{$_SESSION['accno']}','$receiveraccno','Transfer','$transferammount','NULL','$balance2')";
        $result = mysqli_query($conn, $sql);
        return true;
    }

   



?>