<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>

      <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/narKhw/cisla3b.png" alt="cisla3b" border="0"></a>
    	<br>Které čísla schází? Ukažte ve správném pořadí.<br>


<form action="next7.php" method="post" name="next7">

      1.<input type="radio" name="answer" value="0">16 29 57<br>
    	2.<input type="radio" name="answer" value="0">29 16 51<br>
    	3.<input type="radio" name="answer" value="1">16 29 51<br>
    	4.<input type="radio" name="answer" value="0">57 28 16<br>
    	5.<input type="radio" name="answer" value="0">Jiné<br>

        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
