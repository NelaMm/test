   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     

        <br>Jakou tovární značku mělo auto na obrázku?<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked1";?> value="0"> Volvo<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked2";?> value="0"> Seat<br>
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked3";?> value="0"> BMW<br>
       <input type="radio" name="answer"<?php if (isset($answer) && $answer=="true") echo "checked4";?> value="1"> Kia<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="true") echo "checked4";?> value="0"> Ford<br>
        <input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked5";?> value="0"> Jiné<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }

?>