<?php
    session_start();
?>

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
                        <table align="center" width="40%">
                            <tr><td>
                                <fieldset>
                                    <legend>Accounts Summary</legend>
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
                                                <td>Deposit</td>
                                            </tr>";
                                        $sql = "SELECT * FROM registration WHERE Name = '{$_SESSION['name']}' && AccNo = '{$_SESSION['accno']}'";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        echo "<tr align='center'>
                                                    
                                                    <td>{$row['AccNo']}</td>
                                                    <td>{$row['Name']}</td>
                                                    <td>{$row['Deposit']}</td>
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