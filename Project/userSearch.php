<?php

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $userSearch = $_POST["userName"];

    require_once "dbh.inc.php";

    $query = "SELECT * FROM users WHERE name = :username RIGHT JOIN superhereos ON users.favoriteSuperhero = superheroes.name;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $userSearch);
    $stmt->execute();
    $results=$stmt->fetchALL(PDO::FETCH_ASSOC);
    if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
    }
    else {
        echo "<h4>Users: </h4>";
        foreach($results as $row) {
        // sanitize
            echo "<p>" . htmlspecialchars($row["username"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["name"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["power"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["universe"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["team"]) . "</p>";

        }                
    }
}