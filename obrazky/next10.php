   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next10"]))
    {?>


    	<br>Na kterem obrazku byli jen dva ptacky?<br>

        <form action="next11.php" method="post" name="next11">
        
       
      1.<input type="radio" name="answer" value="0">1<br>
    	2.<input type="radio" name="answer" value="0">2<br>
    	3.<input type="radio" name="answer" value="0">3<br>
    	4.<input type="radio" name="answer" value="1">4<br>

        <input type="submit" name="next11" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>