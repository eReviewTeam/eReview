<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eReview";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	/* change character set to utf8 */
	if (!mysqli_set_charset($conn, "utf8")) {
		printf("Error loading character set utf8: %s\n", mysqli_error($conn));
	}
?>