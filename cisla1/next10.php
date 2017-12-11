<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next10"]))
    {?>

      <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/ibGVpb/1cisla3d.png" alt="1cisla3d" border="0"></a>
          	<br>Které čísla schází? Ukažte ve správném pořadí.<br>
    	<h2><br>Které čísla schází? Ukažte ve správném pořadí.<br></h2>

        <form action="next11.php" method="post" name="next11">


      <input type="radio" name="answer" value="0">16, 98, 69<br>
    	<input type="radio" name="answer" value="1">87, 65, 83<br>
    	<input type="radio" name="answer" value="0">83, 65, 89<br>
    	<input type="radio" name="answer" value="0">98, 51, 16<br>
    	<input type="radio" name="answer" value="0">Jiné<br>

        <input type="submit" name="next11" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
