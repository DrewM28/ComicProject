<?php

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $powerSearch = $_POST["power"];

    require_once "dbh.inc.php";

    $query = "SELECT * FROM superheroes WHERE power = :power;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":power", $powerSearch);
    $stmt->execute();
    $results=$stmt->fetchALL(PDO::FETCH_ASSOC);
    if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
    }
    else {
        echo "<h4>Superhero Name: </h4>";
        foreach($results as $row) {
        // sanitize
            echo "<p>" . htmlspecialchars($row["name"]) . "</p>";
        }                
    }
}



