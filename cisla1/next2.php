<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>

   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>

       

        <img src="../obr/1cisla2a.png" width="240" class="edge">
    	<br>Které číslo schází?<br>

      <form action="next3.php" method="post" name="next3" >
    	
      1.<input type="radio" name="answer" value="0">18<br>
    	2.<input type="radio" name="answer" value="0">16<br>
    	3.<input type="radio" name="answer" value="0">51<br>
    	4.<input type="radio" name="answer" value="0">89<br>
    	5.<input type="radio" name="answer" value="1">15<br>
       
        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>