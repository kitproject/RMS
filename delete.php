<?php
	error_reporting(E_ALL);
	include("config.php");
	session_start();

	$empid= $_GET['empid'];
	$sqlcopy="INSERT INTO del_users (SELECT * FROM users WHERE emp_id='$empid')";
	$copy = mysqli_query($db,$sqlcopy);
	$sqldel="DELETE FROM users WHERE emp_id='$empid'";
	$del = mysqli_query($db,$sqldel);

	//$mysqli->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
	//$mysqli->query("INSERT INTO del_users VALUES (SELECT * FROM users WHERE empid='$empid')");
	//$mysqli->commit();
	//$mysqli->query("DELETE FROM users WHERE empid='$empid')");
	//$mysqli->commit();
	//$mysqli->close();

	header("location: premodify.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete User</title>
</head>

<body>
<h1><?php echo "$empid"?></h1>
</body>
</html>