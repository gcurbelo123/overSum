<?php
    include 'inc/functions.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <title> About Overwatch </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <header id = "name">
            <h1> OverSum </h1>
        </header>
        <nav>
            <a href = "index.php">Home</a>
            <span id = "currentLink"><a href = "heroes.php">Heroes</a></span>
            <a href = "heroImg.php">Hero Pics</a>
        </nav>
        <div id = "main">
            </br>;
            </br>;
            <?php
                hero();
            ?>
        </div>
        
    </body>
</html>