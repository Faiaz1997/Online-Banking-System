<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Client Information
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
                        <table align="center" width="50%">
                            <tr><td >
                                <fieldset>
                                    <legend>Personal Informations</legend>
                                    <form method="POST" action="clientfundwithdraw.php"></form>
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'bms');
                                    if($conn == null)
                                    {
                                    die('DB connection error!');
                                    }
                                        echo "<table border=1 align='center'  width='100%'>
                                            <tr align='center'>
                                                <td>Account No</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Address</td>
                                                <td>Phone</td>
                                                <td>Deposit</td>
                                                <td>Gender</td>
                                                <td>DOB</td>
                                            </tr>";
                                        $sql = "SELECT * FROM registration WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        echo "<tr align='center'>
                                                    
                                                    <td>{$row['AccNo']}</td>
                                                    <td>{$row['Name']}</td>
                                                    <td>{$row['Email']}</td>
                                                    <td>{$row['Address']}</td>
                                                    <td>{$row['Phone']}</td>
                                                    <td>{$row['Deposit']}</td>
                                                    <td>{$row['Gender']}</td>
                                                    <td>{$row['DOB']}</td>
                                            </tr>";

                                    echo "</table>";
                                    ?>
                                </fieldset>
                            </td></tr>
                        </table>
                    </td>
                </tr>
            </table>
    </body>
</html>