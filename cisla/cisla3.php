   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["cisla3"]))
    {?>
    	
      <img src="../obr/cisla2a.png" >
    	<br>Které číslo schází?<br>

        <form action="cisla4.php" method="post" name="cisla4">
    	
      1.<input type="radio" name="answer" value="0">83<br>
    	2.<input type="radio" name="answer" value="1">98<br>
    	3.<input type="radio" name="answer" value="0">15<br>
    	4.<input type="radio" name="answer" value="0">89<br>
    	5.<input type="radio" name="answer" value="0">55<br>

        <input type="submit" name="cisla4" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>