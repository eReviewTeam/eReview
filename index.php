<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>評分系統（明志科大電子系）</title>
<meta charset="Big-5">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header>
    <table id="headerTable">
        <tr>
            <th id="headerFront"></th>
            <th id="headerTitle"><h2>明志評分系統</h2></th>
            <th id="headerLogin">
                <form>
                    <input type="text" id="accountId" name="account" placeholder="帳號"><br>
                    <input type="text" id="pwdId" name="password" placeholder="密碼"><br>
                    <input type="submit" id="loginBtn" value="登入"/>
                </form>
            </th>
        </tr>
    </table>
</header>

<section>
<table style="width:100%">
    <tr>
        <td colspan="3" style="height:50px;width:250px;" align='center' valign="middle"><h2><font color="red" face="微軟正黑體">專題技能競賽</font></h2></td>
        <td>新增</td>
    </tr> 
</table>
<?php
    $sql = "SELECT * FROM PROJECT";
    $result = $conn->query($sql) or die(mysql_error());
    
    if ($result->num_rows > 0) {
        echo "<form action=\"\">";
        while($row = $result->fetch_assoc()) {
            echo "<center>";
            echo "<table style=  \"border:3px #1A1A1A solid;padding:5px;width:400px;height:50px\" rules=\"all\" cellpadding='5';>";
            echo "<tr><td align='center' valign=\"middle\">專題名稱</td><td><input type=\"text\" value=\"".$row['PROJECTNAME']."\"></td><td rowspan=\"3\">&ensp;<input type=\"Submit\" value=\"修改\">&thinsp;<input type=\"Submit\" value=\"刪除\"></td></tr>";
            echo "<tr><td align='center' valign=\"middle\">主辦單位</td><td><input type=\"text\" value=\"".$row['MANAGER']."\"></td>";
            echo "<tr><td align='center' valign=\"middle\">簡介</td><td><input type=\"text\" value=\"".$row['DESCRIPTION']."\"></td>";
            // foreach ($row as $key => $value) {
            //     $array[$key][] = $value;
            //     echo "$value    |     ";
            // }
            // echo "<br>";
            echo "</table>";
            echo "</center>";
            echo "<hr>";
        }
        echo "</form>";
    } else {
        $message = "Project is empty!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn->close();
?>
</section>

<footer>
    <p>開發人員 : 明志科技大學電子系子三甲</p>
</footer>
</body>
</html>

