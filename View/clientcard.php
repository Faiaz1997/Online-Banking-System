<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Client Card Application
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
                    <table align="center" >
                        
                        <tr>
                            <td >
                                <form method="POST" action="../Controller/clientcardv.php" onsubmit="return Validation()">
                                    <fieldset>
                                        <legend>Card Application Form</legend>                                            
                                        <table align="center" >
                                            <tr>
                                                <td>
                                                    Name: <br><br>
                                                    <input type="text" name="name" id="name"><br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Account No: <br><br>
                                                    <input type="text" name="clientaccountno" id="clientaccountno"><br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Card Type: <br><br>
                                                    <select name="cardtype" id="cardtype">
                                                        <option value=""></option>
                                                        <option value="Visa">Visa Debit Card</option>
                                                        <option value="MasterCard">MasterCard Debit Card</option>
                                                        <option value="Maestro">Maestro Debit Cards</option>
                                                        <option value="Platinum">Platinum Debit Card.</option>
                                                    </select> <br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Request Type: <br><br>
                                                    <select name="reqtype" id="reqtype">
                                                        <option value=""></option>
                                                        <option value="Activate">Activate</option>
                                                        <option value="Deactivate">Deactivate</option>
                                                    </select> <br><br>
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td >
                                                    <input type="submit" name="submit" value="Submit" ><br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                            <?php
                                            	$conn = mysqli_connect('localhost', 'root', '', 'bms');
                                                if($conn == null){
                                                    die('DB connection error!');
                                                }
                                                $sql = "SELECT * FROM card WHERE AccNo = '{$_SESSION['accno']}' && 
                                                status = 'Active'";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<table border=1 align='center'  width='100%'>
                                                    <tr align='center'>
                                                        <td>Name</td>
                                                        <td>Account No</td>
                                                        <td>Card Type</td>
                                                        <td>Status</td>
                                                    </tr>";   
                                                    while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<tr align='center'>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['AccNo']}</td>
                                                        <td>{$row['cardtype']}</td>
                                                        <td>{$row['status']}</td>
                                                        </tr>";
                                                    }
                                                echo "</table>";
                                             ?>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
            function Validation()
            {
                const name = document.getElementById('name').value;
                const clientaccountno = document.getElementById('clientaccountno').value;
                const cardtype = document.getElementById('cardtype').value;
            

                let errorflag=false;
                let i=0;
                
                if(name == '' || clientaccountno == '' || cardtype== '' )
                {
                    alert('Null Submission');
                    errorflag=true;
                }
                else
                {
                    let clientaccflag=false; 
                    for(i=0; i<=clientaccountno.length; i++)
                    {
                        if(clientaccountno[i]  >= 0  && clientaccountno[i]  <= 9 )
                        {
                                clientaccflag=true;			         
                        }
                    }
                    if(clientaccflag == false)
                    {
                        alert ('Invalid Account Number Format');
                        errorflag=true;
                    }  
                }
                if(errorflag==false)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        </script>
    </body>
</html>