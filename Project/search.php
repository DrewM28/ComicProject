<?php
// oftentimes when you connect to an ACTUAL server, the host
// would be something like 168.182.8.8 an IPv4 address
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["name"];

    require_once "dbh.inc.php";
    //echo "connection successful<br>";

    $query = "SELECT * FROM superheroes WHERE name = :name;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $userSearch);
    $stmt->execute();
    $results=$stmt->fetchALL(PDO::FETCH_ASSOC);
    if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results!</p>";
        echo "</div>";
    }
    else {
        foreach($results as $row) {
            // sanitize
            echo "<h4>Superhero Name: </h4>";
            echo "<p>" . htmlspecialchars($row["name"]) . "</p>";
            echo "<h4>Superpower: </h4>";
            echo "<p>" . htmlspecialchars($row["power"]) . "</p>";
            echo "<h4>Universe: </h4>";
            echo "<p>" . htmlspecialchars($row["universe"]) . "</p>";
            echo "<h4>Team: </h4>";
            echo "<p>" . htmlspecialchars($row["team"]) . "</p>";
        }                
    }
}

else {
    header("Location: indexPHP.php");
}
?>