<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;" />
    <link href="style.css" rel="stylesheet" type="text/css; charset=UTF-8" />
	<script type="text/javascript" src="jquery-2.0.3.min.js"></script>
</head>
<body>
<?php
    include 'init.php';

    // Database Query
    $sql = "SELECT SYSDATE FROM DUAL";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
        // Have Data
        while($row = $result->fetch_assoc()) {
            // Data Process
        }
    } else {
        // No Data;
    }
?>
</body>
</html>