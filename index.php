<?php
	include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header>
    <table id="headerTable">
        <tr>
            <th id="headerFront"></th>
            <th id="headerTitle"><h2>Cities</h2></th>
            <th id="headerLogin">
                <form>
                    帳號<input type="text" id="accountId" name="account"><br>
                    密碼<input type="text" id="pwdId" name="password"><br>
                    <input type="submit" id="loginBtn" value="登入"/>
                </form>
            </th>
        </tr>
    </table>
</header>

<section>
<table style="width:100%" >
    <tr>
        <td colspan="3" style="height:50px;width:250px;" align='center' valign="middle"><h2>專題技能競賽</h2></td>
    </tr>
</table>
<hr>
<table style="width:100%">
  <tr>
    <th>新增</th>
    <th>修改</th> 
    <th>刪除</th>
  </tr>
</table>
<hr>
<center>
    <table style=  "border:3px #FFAC55 solid;padding:5px;width:400px;height:50px" rules="all" cellpadding='5';>
        <tr>
            <td align='center'valign="middle">專題名稱:</td>
            <td>泰國阿金騎士競賽</td>
        </tr>
        <tr>
            <td align='center'valign="middle">主辦單位:</td>
            <td>阿金動保協會</td>
        </tr>
        <tr>
            <td style="height:50px" align='center'valign="middle">簡介:</td>
            <td>想看阿金奔跑競賽嗎?</td>
        </tr>
    </table>
</center>
<hr>
<center>
    <table style=  "border:3px #FFAC55 solid;padding:5px;width:400px;height:50px" rules="all" cellpadding='5';>
        <tr>
            <td align='center'valign="middle">專題名稱:</td>
            <td>野豬騎士競賽</td>
        </tr>
        <tr>
            <td align='center'valign="middle">主辦單位:</td>
            <td>野豬動保協會</td>
        </tr>
        <tr>
            <td style="height:50px" align='center'valign="middle">簡介:</td>
            <td>想看野豬奔跑競賽嗎?</td>
        </tr>
    </table>
</center>
<hr>
<center>
    <table style=  "border:3px #FFAC55 solid;padding:5px;width:400px;height:50px" rules="all" cellpadding='5';>
        <tr>
            <td align='center'valign="middle">專題名稱:</td>
            <td>飛天掃把競賽</td>
        </tr>
        <tr>
            <td align='center'valign="middle">主辦單位:</td>
            <td>魔法協會</td>
        </tr>
        <tr>
            <td style="height:50px" align='center'valign="middle">簡介:</td>
            <td>想看掃把在天上飛嗎?</td>
        </tr>
    </table>
</center>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
