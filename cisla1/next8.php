<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next8"]))
    {?>


      <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/keybUb/1cisla3c.png" alt="1cisla3c" border="0"></a>
    	<br>Které čísla schází? Ukažte ve správném pořadí.<br>

        <form action="next9.php" method="post" name="next9">


        1.<input type="radio" name="answer" value="0">39 47 19<br>
    	2.<input type="radio" name="answer" value="1">39 94 94<br>
    	3.<input type="radio" name="answer" value="0">47 94 36<br>
    	4.<input type="radio" name="answer" value="0">94 39 94<br>
    	5.<input type="radio" name="answer" value="0">Jiné<br>

        <input type="submit" name="next9" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
