   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["cisla5"]))
    {?>
    	
      <img src="../obr/cisla3a.png" >
    	<br>Které čísla schází?<br>

        <form action="cisla6.php" method="post" name="cisla6">
    	
    

        <input type="submit" name="cisla6" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>