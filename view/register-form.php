<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<head>
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="username">Username: </label> 
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit">Submit:</button>
	</div>
</form>
