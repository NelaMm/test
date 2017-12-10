<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>
   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>

       

        <img src="../obr/cisla2a.png" width="360" class="edge">
    	<br>Které číslo schází?<br>

      <form action="next3.php" method="post" name="next3">
    	
      1.<input type="radio" name="answer" value="0">83<br>
    	2.<input type="radio" name="answer" value="1">98<br>
    	3.<input type="radio" name="answer" value="0">15<br>
    	4.<input type="radio" name="answer" value="0">89<br>
    	5.<input type="radio" name="answer" value="0">55<br>
       
        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>