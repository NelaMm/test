   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next12"]))
    {?>
     <div id=tst align=center>
        <br>Kolik bylo na obrázku lidí?<br>

        <form action="result.php" method="post" name="result">
        
       
       <input type="radio" name="answer" value="0"> 0<br>
        <input type="radio" name="answer" value="0"> 1<br>
       <input type="radio" name="answer" value="0">2 <br>
       <input type="radio" name="answer" value="0">3<br>
        <input type="radio" name="answer" value="0">4 <br>
        <input type="radio" name="answer" value="1">5<br>
        <input type="radio" name="answer" value="0">6<br>
        <input type="radio" name="answer" value="0">7<br>
        <input type="radio" name="answer" value="0">více<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>