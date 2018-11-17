<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include 'init.php';
?>
    <meta http-equiv="Content-Type" content="text/html;" />
    <link href="style.css" rel="stylesheet" type="text/css; charset=UTF-8" />
	<script type="text/javascript" src="jquery-2.0.3.min.js"></script>
	<script>
	$(function(){
		<?php 
		if (isset($_SESSION["reviewerid"])){
			echo 'login();';
		}?>
		logincheck();		
	})
	
	function login() {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("loginform").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","loginprocess.php?getaccount="+$('#account').val()+"&getpassword="+$('#password').val(),true);
		xmlhttp.send();
		<?php 

			$_SESSION['page'] = "review.php"; 
			echo "setTimeout(function (){ location.reload();},500);";

		?>
	}
	
	function logincheck() {
		if (($('#account').val() == "") && ($('#password').val() == "")) {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else { 
			login();
		}
	}
	</script>
</head>
<body>
	<div id="loginform">
		<input type=text id="account">
		<br>
		<input type=hidden id="password">
		<br>
		<input type="button" id="loginbutton" onClick="logincheck()" value="登入">
	</div>
</body>
</html>