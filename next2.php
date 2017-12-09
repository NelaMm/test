   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>
        <img src="obr/obr10.png" width="100" height="100">
       

        <br>Byla tato značka mezi obrázky?<br>

        <form action="next3.php" method="post" name="next3">
        
        Ano<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked1";?> value="0">
        Ne<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked2";?> value="1">
       
        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }

?>