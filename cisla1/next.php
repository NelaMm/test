<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>

    	 <img src="../obr/1cisla1a.png" width="240" class="edge">
    	<h2><br>Které číslo schází?<br></h2>

        <form action="next1.php" method="post" name="next1">

      <input type="radio" name="answer" value="0">93<br>
    	<input type="radio" name="answer" value="0">15<br>
    	<input type="radio" name="answer" value="1">94<br>
    	<input type="radio" name="answer" value="0">86<br>
    	<input type="radio" name="answer" value="0">84<br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
