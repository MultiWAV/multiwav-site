<!DOCTYPE html>
<html>
<head>
	<title>My Account // MultiWAV Audio</title>
	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
	<link rel="stylesheet" type="text/css" href="assets/css/my_account.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="background-color: #1c1c1c;">
	<div class="header">

	<?php echo file_get_contents( "header.php" ); ?>

	</div>

	<div class="content">

		<div class="myaccount">

			<div class="sectionBox">

				<h1>My Account</h1>

				<button class="multiwav-btn" style="margin-top: 0px;">Change Password</button>
				<button class="multiwav-btn" style="margin-top: 0px; background-color: red;">Delete Account</button>

			</div>
			<div class="sectionBox">

				<h1>Licence</h1>

				<p>Edition: <b>MultiWAV Pro</b></p>
				<br>
				<p>Workstations Regisered:</p>
				<b>MultiWAV Pro</b>

				
			</div>

		</div>

	</div>

	
</body>
</html>