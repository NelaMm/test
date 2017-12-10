   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     

        <img src="../obr/cisla3a.png" >
    	<br>Které čísla schází?<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer1" value="-1">48<br>
        <input type="radio" name="answer2" value="1">47<br>
       <input type="radio" name="answer3" value="-1">67<br>
       <input type="radio" name="answer4" value="-1">91<br>
        <input type="radio" name="answer5" value="-1">53<br>
        <input type="radio" name="answer6" value="1">63<br>
        <input type="radio" name="answer7" value="-1">Jina.<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>