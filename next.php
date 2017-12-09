   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>
    	1.<img src="obr/obr11.png" width="100" height="100">
        2.<img src="obr/obr5.png" width="100" height="100">
        3.<img src="obr/obr7.png" width="100" height="100">
        4.<img src="obr/obr9.png" width="100" height="100">
        5.<img src="obr/obr1.png" width="100" height="100">

    	<br>Která značka nebyla v obrázcích?<br>

        <form action="next1.php" method="post" name="next1">
    	
        1.<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked1";?> value="0"><br>
    	2.<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked2";?> value="0"><br>
    	3.<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked3";?> value="0"><br>
    	4.<input type="radio" name="answer"<?php if (isset($answer) && $answer=="true") echo "checked4";?> value="1"><br>
    	5.<input type="radio" name="answer"<?php if (isset($answer) && $answer=="false") echo "checked5";?> value="0"><br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }

?>