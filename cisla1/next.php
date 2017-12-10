   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>
    	
    	 <img src="../obr/1cisla1a.png" width="240" class="edge">
    	<br>Které číslo schází?<br>

        <form action="next1.php" method="post" name="next1">
    	
      1.<input type="radio" name="answer" value="0">93<br>
    	2.<input type="radio" name="answer" value="0">15<br>
    	3.<input type="radio" name="answer" value="1">94<br>
    	4.<input type="radio" name="answer" value="0">86<br>
    	5.<input type="radio" name="answer" value="0">84<br>
      
        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>