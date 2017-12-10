<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>

    
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     
<div id=tst align=center>
        <br>Jakou tovární značku mělo auto na obrázku?<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer" value="0"> Volvo<br>
        <input type="radio" name="answer" value="0"> Seat<br>
       <input type="radio" name="answer" value="0"> BMW<br>
       <input type="radio" name="answer" value="1"> Kia<br>
        <input type="radio" name="answer" value="0"> Ford<br>
        <input type="radio" name="answer" value="0"> Jiné<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>