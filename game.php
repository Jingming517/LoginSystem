<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title></title> 
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>
        <script type="text/javascript" src = "JellyButton.js"></script>
	</head>
	<body>
        <main>
            <div class="wrapper-main">
                <section class="section-default">
                    <p>Game</p>
                </section>
            </div>
        </main>
        <div class="main">
                <button type="level" onclick="gameLevel.php">LEVEL 1</button>
                <button type="level" onclick="gameLevel.php">LEVEL 2</button>
                <button type="level" onclick="gameLevel.php">LEVEL 3</button>
                <button type="level" onclick="gameLevel.php">LEVEL 4</button>
                <button type="level" onclick="gameLevel.php">LEVEL 5</button>
                <button type="level" onclick="gameLevel.php">LEVEL 6</button>				
        </div>
        <div class="buttons">
            <span class="hex lightblue"></span>
            <span class="hex blue"></span>
            <span class="hex darkblue"></span>
            <span class="hex darkblue"></span>
            <span class="hex lightblue"></span>
        </div>
    </body>

<?php
	require "footer.php";
?>