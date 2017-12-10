   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     

        <br>Bylo na SPZ číslo 7?<br>

        <form action="next5.php" method="post" name="next5">
        
       
       <input type="radio" name="answer" value="1"> ANO<br>
        <input type="radio" name="answer" value="0"> NE<br>
       

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>