   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["cisla1"]))
    {?>
    	
      <img src="../obr/cisla1a.png">
    	<br>Které číslo schází?<br>

        <form action="cisla2.php" method="post" name="cisla2">
    	
      1.<input type="radio" name="answer" value="0">53<br>
    	2.<input type="radio" name="answer" value="0">28<br>
    	3.<input type="radio" name="answer" value="0">15<br>
    	4.<input type="radio" name="answer" value="1">29<br>
    	5.<input type="radio" name="answer" value="0">79<br>

        <input type="submit" name="cisla2" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>