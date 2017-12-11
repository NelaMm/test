<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next10"]))
    {?>

      <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/dVHEFG/cisla3d.png" alt="cisla3d" border="0"></a>
    	<br>Které čísla schází? Ukažte ve správném pořadí.<br>

        <form action="next11.php" method="post" name="next11">


      1.<input type="radio" name="answer" value="1">16 98 15<br>
    	2.<input type="radio" name="answer" value="0">16 15 98<br>
    	3.<input type="radio" name="answer" value="0">16 96 51<br>
    	4.<input type="radio" name="answer" value="0">98 51 16<br>
    	5.<input type="radio" name="answer" value="0">Jiné<br>

        <input type="submit" name="next11" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
