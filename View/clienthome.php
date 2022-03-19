<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/utils.css">
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="../View/Bankdashboard.php"><img src="../Image/cryptologo.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		  
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav mr-auto">
			  </ul>
			  <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
			</div>
		  </nav>
	</header>
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
                            <tr><td><b><?php echo "Welcome ",$_SESSION['name']?></b><br><br><br></td></tr>
                            <tr><td><b>Features:</b><br></td></tr>
                            <tr><td><p>
                                1.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus fringilla interdum. Nam a congue lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                Nulla tincidunt nulla tristique, commodo odio ac, cursus ante. Integer nibh eros, blandit sit amet massa sit amet, viverra consequat metus. Aliquam posuere auctor erat eget luctus. 
                                Proin elit erat, aliquet non nibh sed, faucibus scelerisque lectus. Quisque id convallis odio. Nulla vestibulum, libero sit amet imperdiet rutrum, mi magna luctus quam, quis posuere lectus justo vel dolor. 
                                Integer fringilla, neque vitae sagittis mattis, lacus est luctus lectus, in interdum felis sem non enim. <br><br><br>

                                2.Aliquam finibus gravida mi, a vehicula odio ultricies id. Nam mollis fermentum libero, sit amet facilisis felis convallis eget. Nulla facilisi. Ut vitae laoreet dui. Fusce placerat scelerisque est at laoreet. 
                                Nullam placerat felis sit amet odio sodales semper. Sed in arcu dignissim, mattis arcu vitae, fringilla nunc. Vestibulum turpis turpis, pulvinar ut consequat eget, auctor a orci. Maecenas sit amet imperdiet lacus, 
                                eu sollicitudin libero. Nunc est mauris, rutrum quis elementum et, laoreet sed eros. Cras semper orci sem, vel imperdiet ligula varius vitae. Sed vitae venenatis ante. Quisque a lacus convallis, ultrices diam in, 
                                iaculis nibh. Etiam auctor convallis sem, eget placerat elit pretium sit amet. Aliquam id magna ut sapien rhoncus cursus. Vestibulum vitae urna ut elit ornare cursus. <br><br><br>

                                3.Integer in quam viverra, venenatis metus vel, dignissim eros. Sed faucibus turpis neque, nec tristique nibh consectetur at. Morbi quis convallis ante, id ultricies lorem. Duis magna ipsum, tempus eu nunc vel, mollis 
                                fermentum metus. Nam porta nisi a viverra vehicula. Praesent vestibulum augue eu porta iaculis. Proin a feugiat quam, ac hendrerit ligula. Pellentesque vel velit vitae mi aliquam pulvinar ac a tortor. Quisque ullamcorper 
                                quam augue, id consectetur odio finibus sed. Sed nec gravida sem. Proin aliquam bibendum quam nec tristique. Nulla nunc arcu, blandit vestibulum elit id, mollis finibus sapien. Integer elementum leo quis nunc feugiat, id 
                                eleifend neque porta. Donec dignissim felis arcu, vel cursus elit pharetra eu.
                            </p></td></tr>
                        </table>

                    </td>
                </tr>
            </table>
    </body>
</html>