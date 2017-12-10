<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>


        <img src="../obr/1cisla3a.png" width="360" class="edge">
    	<h2><br>Které čísla schází?<br></h2>

        <form action="next5.php" method="post" name="next5">


       <input type="checkbox" name="answer1" value="-1">56<br>
        <input type="checkbox" name="answer2" value="1">65<br>
       <input type="checkbox" name="answer3" value="-1">67<br>
       <input type="checkbox" name="answer4" value="-1">91<br>
        <input type="checkbox" name="answer5" value="1">83<br>
        <input type="checkbox" name="answer6" value="-1">63<br>
        <input type="checkbox" name="answer7" value="-1">Jiné<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
