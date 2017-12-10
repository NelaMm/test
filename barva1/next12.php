   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next12"]))
    {?>
     <div id=tst align=center>
        <br>Která barva nebyla uvedena?<br>

        <form action="result.php" method="post" name="result">
        
       
       <input type="radio" name="answer" value="0">Zlatá<br>
        <input type="radio" name="answer" value="0">Červená<br>
       <input type="radio" name="answer" value="1">Modrá<br>
       <input type="radio" name="answer" value="0">Oranžová<br>
        <input type="radio" name="answer" value="0">Fialová<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>