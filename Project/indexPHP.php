<meta http-equiv="refresh" content="10" />

<?php
    session_start();

    $image = ["FlashCover", "BatmanCover", "MoonKnightCover", "SpiderManCover", "KidFlashCover", "IronManCover", "CaptainAmericaCover", "WolverineCover"];
    $rand = rand(0, count($image) - 1);
    $selectedimage = $image[$rand];

    echo "<img src='/images/$selectedimage.jpg' alt='Superhero Cover' style='float:right;width:600px;height:900px;'>";

?>


         

?>

<!DOCTYPE html>
<html>
    <title>Comic Website</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.JS" type="text/javascript"></script>
    <header>
        <button onclick="myFunction()">Dark Mode</button>
        
    </header>
    <body>
        <?php include "header.php"; ?>
        <form action="formhandler.inc.php" method="POST">
        <h3>New User</h3>
            <label id="username">Username: </label>
            <input type="text" name="userName" placeholder="Drew Milton">
            <label id="password">Password: </label>
            <input type="password" name="passWord" placeholder="****">
            <label id="favsuper">Favorite Superhero: </label>
            <input type="text" name="favsupe" placeholder="The Flash">
            <button id="submit">Submit User</button>
        </form>
        <br>

        <h3>Query</h3>
            <form class="searchform" action="search.php" method="POST">
                <label id="search">Search for a superhero: </label>
                <input id="search" type="text" name="name" placeholder="Search">
                <button>Search</button>
                <br>

            </form>
        <h3>Power Query</h3>
            <form class="searchform" action="searchPowers.php" method="POST">
                <label id="power">Search for a superpower: </label>
                <input id="power" type="text" name="power" placeholder="Search">
                <button>Search</button>
            </form>
        <h3>Full Query</h3>
            <form class="searchform" action="userSearch.php" method="POST">
                <label id="usersearch">Search for user: </label>
                <input id="usersearch" type="text" name="user" placeholder="Search">
                <button>Search</button>
            </form>


        <?php include "footer.php"; ?>
    </body>
</html>
