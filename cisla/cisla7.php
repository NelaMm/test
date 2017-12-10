   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["cisla7"]))
    {?>
    	
      <img src="../obr/cisla4a.png" >
    	<br>Které čísla schází?<br>

        <form action="cisla8.php" method="post" name="cisla8">
    	
      

        <input type="submit" name="cisla8" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>