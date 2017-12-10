   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>
    	
      
    	<br>Na kterem z obrazku se nachazil zluty ptacek?<br>

        <form action="next1.php" method="post" name="next1">
    	
        1.<input type="radio" name="answer" value="0">1<br>
    	2.<input type="radio" name="answer" value="1">2<br>
    	3.<input type="radio" name="answer" value="0">3<br>
    	4.<input type="radio" name="answer" value="0">4<br>
      
        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>