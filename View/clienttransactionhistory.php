<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Client Transaction History
        </title>
        <style>
            .c1{
                background-color: #D1EAF7;
                color:#009DEB;
                padding: 10px 10px 10px 10px;
            }
        </style>
    </head>
    <body>
    <table align="center" width="100%" height="80px" border="1">
                <tr class="c1">
                <td align="center" width="25%"><a href="clienthome.php">Home</a></td>     
                </tr>
            </table>
            <table border="1" width="100%">
                <tr>
                    <td width="20%" class="c1">
                    <table height="600px">
                        <tr><td><b>Accounts</b></td></tr>
                        <tr><td><a href="clientaccountsummary.php">Accounts Summary</a> </td></tr>
                        <tr><td><a href="clienttransactionhistory.php">Transaction History</a> </td></tr>
                        <tr><td><b>Fund Transfer</b></td></tr>
                        <tr><td><a href="clientfundwithdraw.html">Withdraw</a> </td></tr>
                        <tr><td><a href="clientfundtransfer.html">Transfer</a></td></tr>
                        <tr><td><b>Requests</b></td></tr>
                        <tr><td><a href="clientcard.php">Atm Card</a></td></tr>
                        <tr><td><b>Profile</b></td></tr>
                        <tr><td><a href="clientdetails.php">Personal Details</a> </td></tr>
                        <tr><td><a href="clientpasschange.html">Change Password</a></td></tr>
                        <tr><td><a href="../Controller/clientlogout.php">Log Out</a></td></tr>
                    </table>
                </td>
                <td width="80%">
                    <table align="center" width="60%">
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Transaction History</legend>
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'bms');
                                    if($conn == null)
                                    {
                                    die('DB connection error!');
                                    }
                                    $sql = "SELECT * FROM transaction WHERE AccNo = '{$_SESSION['accno']}'";
                                    $result = mysqli_query($conn, $sql);
                                    echo "<table border=1 align='center'  width='100%'>
                                        <tr align='center'>
                                            <td>Transaction Id</td>
                                            <td>Sender Id</td>
                                            <td>Receiver Id</td>
                                            <td>Transaction Type</td>
                                            <td>Credit</td>
                                            <td>Debit</td>
                                            <td>Balance</td>
                                        </tr>";   
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<tr align='center'>
                                            <td>{$row['transactionId']}</td>
                                            <td>{$row['senderid']}</td>
                                            <td>{$row['receiverid']}</td>
                                            <td>{$row['type']}</td>
                                            <td>{$row['credit']}</td>
                                            <td>{$row['debit']}</td>
                                            <td>{$row['balance']}</td>
                                            </tr>";
                                        }
                                    echo "</table>";
                                    ?>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>