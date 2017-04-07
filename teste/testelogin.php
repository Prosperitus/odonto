<?php

include "dbconnect.php";
$dbconnect= DbConnector();
$conn = $dbconnect->getConn();
$sql = "SELECT * FROM users WHERE email = :email OR cro = :cro AND password = :password";
$stmt = $conn->prepare();
$stmt->bindParam(":email",$email);
$stmt->bindParam(":cro",$cro);
$stmt->bindParam(":password",$password);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);
