<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barvy</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>
   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     
<div id=tst align=center>
        <br>Pár na obrázku měl oblečení v kombinaci těchto barev:<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer" value="0"> Šedá, červená, zelená.<br>
        <input type="radio" name="answer" value="0"> Bílá, zelená, šedá.<br>
       <input type="radio" name="answer" value="0"> Červená, zelená, modrá.<br>
       <input type="radio" name="answer" value="1"> Červená, hnědá, modrá.<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>