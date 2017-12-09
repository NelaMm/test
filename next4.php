   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     

        <br>Jakou barvu mělo auto na obrázku?<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked1";?> value="1"> Modrou<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked2";?> value="0"> Červenou<br>
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked3";?> value="0"> Černou<br>
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="true") echo "checked4";?> value="0"> Zelenou<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="true") echo "checked4";?> value="0"> Stříbrnou<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked5";?> value="0"> Nevím<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }

?>