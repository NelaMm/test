   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next12"]))
    {?>
     
        <img src="../obr/1cisla4a.png" width="480" class="edge">
    	<br>Které čísla schází?<br>

        <form action="result.php" method="post" name="result">
        
       
       1.<input type="radio" name="answer1" value="1">39<br>
        2.<input type="radio" name="answer2" value="-1">69<br>
       3.<input type="radio" name="answer3" value="-1">26<br>
       4.<input type="radio" name="answer4" value="-1">85<br>
        5.<input type="radio" name="answer5" value="1">52<br>
        6.<input type="radio" name="answer6" value="1">83<br> 
        7.<input type="radio" name="answer7" value="-1">33<br>
        8.<input type="radio" name="answer8" value="-1">57<br>
        9.<input type="radio" name="answer9" value="-1">Jiné<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>