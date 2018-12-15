<?php
    $echoMode = true;
    $testData = true;

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "EREVIEW";
    $conn = null;

    if ($echoMode == false) {    
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }    
    }

    function processSQL($echoMode, $connDB, $sqlCommand) {
        if ($echoMode == false) {
            if ($connDB->query($sqlCommand) === true) {
                echo "Table MyGuests created successfully";
            } else {
                echo "Error creating table: " . $connDB->error;
            }
            return;
        }
        echo $sqlCommand.";<br>";
        return;
    }

    processSQL($echoMode, $conn, "CREATE DATABASE $dbname CHARACTER SET utf8 COLLATE utf8_general_ci");

    if ($echoMode == false) {
        mysqli_select_db($con, $dbname);
    }

    // sql to create table    
    processSQL($echoMode, $conn, "CREATE TABLE $dbname.USER ("  // User Table
        . " UID_USER INT NOT NULL AUTO_INCREMENT,"   //使用者序號
        . " USERID VARCHAR(32) NOT NULL,"   // 使用者代碼(英文名加上英文姓)
        . " USERNAME VARCHAR(256),"        // 使用者名稱
        . " PWD VARCHAR(256),"        // 使用者密碼
        . " PRIMARY KEY (UID_USER)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.PROJECT ("   // Project Table
        . " UID_PROJECT INT NOT NULL AUTO_INCREMENT," // 專案序號
        . " PROJECTNAME VARCHAR(256),"  // 專案名稱
        . " DESCRIPTION VARCHAR(1024)," // 專案簡介
        . " MANAGER VARCHAR(256),"  // 專案管理單位名稱
        . " PRIMARY KEY (UID_PROJECT)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.PERMISSION ("   // Permission Table
        . " PROJECT INT NOT NULL," // 專案序號
        . " USER INT NOT NULL,"   //使用者序號
        . " ROLELEVEL VARCHAR(16),"        // 權限等級(管理者, 評審, 工作人員)
        . " PRIMARY KEY (PROJECT, USER, ROLELEVEL)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.RELATION ("   // Relation Table
        . " RELATIONTYPE VARCHAR(64) NOT NULL," // 關聯型態
        . " MAIN VARCHAR(256),"  // 主要關聯
        . " LINK VARCHAR(256)," // 被關聯
        . " PRIMARY KEY (RELATIONTYPE)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.GROUPLIST ("   // Group Table
        . "UID_GROUP INT NOT NULL AUTO_INCREMENT," // 組別序號
        . " GROUPNAME VARCHAR(256),"    // 組別名稱
        . " DESCRIPTION VARCHAR(1024)," // 組別簡介
        . " PRIMARY KEY (UID_GROUP)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.SCOREITEM (" // Score Item Table
        . " UID_ITEM INT NOT NULL AUTO_INCREMENT," // 項目序號
        . " PROJECT INT,"   // Link UID_PROJECT
        . " GROUPID INT," // Link UID_GROUP
        . " ITEMNAME VARCHAR(64)," // 項目名稱
        . " MAXSCORE INT," // 最高分
        . " PRIMARY KEY (UID_ITEM)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.SCOREDATA (" // Score Data Table
        . " UUID VARCHAR(64),"
        . " PROJECT INT,"   // Link UID_PROJECT
        . " GROUPID INT," // Link UID_GROUP
        . " ITEM INT,"   // Link UID_ITEM
        . " SCORE INT,"
        . " PRIMARY KEY (UUID)"
        . ")");

    processSQL($echoMode, $conn, "CREATE TABLE $dbname.SCORETYPE (" // Score Type Table
        . " UID INT NOT NULL AUTO_INCREMENT,"
        . " SCORETYPE VARCHAR(16),"    // 評分類型
        . " MINSCORE INT,"  // 最低分
        . " MAXSCORE INT,"  // 最高分
        . " SCORE VARCHAR(16),"    // 分數
        . " PRIMARY KEY (UID)"
        . ")");

    if ($testData == true) {
        // Project Data
        processSQL($echoMode, $conn, "INSERT INTO PROJECT (`PROJECTNAME`, `DESCRIPTION`, `MANAGER`) VALUES ('泰國阿金騎士競賽','想看阿金奔跑競賽嗎?','阿金動保協會')");
        processSQL($echoMode, $conn, "INSERT INTO PROJECT (`PROJECTNAME`, `DESCRIPTION`, `MANAGER`) VALUES ('野豬騎士競賽','想看野豬奔跑競賽嗎?','野豬動保協會')");
        processSQL($echoMode, $conn, "INSERT INTO PROJECT (`PROJECTNAME`, `DESCRIPTION`, `MANAGER`) VALUES ('飛天掃把競賽','想看掃把在天上飛嗎?','魔法協會')");
    }

    if ($echoMode == false) {
        $conn->close();
    }
?>