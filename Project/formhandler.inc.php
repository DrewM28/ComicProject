<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["userName"];                             
    $passw = $_POST["passWord"]; 
    $favsupe = $_POST["favsupe"];

    try {
        require_once "dbh.inc.php";  
        $query="INSERT INTO users (username, password, favoriteSuperhero) VALUES (:username, :passw, :favsupe);";
        

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":passw",$passw);
        $stmt->bindParam(":favsupe", $favsupe);

        $stmt->execute();

        $pdo = NULL;
        $stmt = NULL;
        header("Location: indexPHP.php");

        die();
   
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    } 
} else {
    header("Location: indexPHP.php");
    echo "Failed";
}