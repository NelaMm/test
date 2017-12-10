   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     
<div id=tst align=center>
        <br>Slečna na obrázku měla oblečení v kombinaci těchto barev:<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer" value="0"> Šedá, červená.<br>
        <input type="radio" name="answer" value="1"> Modrá, hnědá.<br>
       <input type="radio" name="answer" value="0"> Hnědá, zelená.<br>
       <input type="radio" name="answer" value="0"> Červená, hnědá.<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>