<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>

      <a href="https://imgbb.com/"><img width="240" class="edge" src="https://image.ibb.co/n9ji9b/cisla1a.png" alt="cisla1a" border="0"></a>
    	<br>Které číslo schází?<br>

        <form action="next1.php" method="post" name="next1">

        1.<input type="radio" name="answer" value="0">53<br>
    	2.<input type="radio" name="answer" value="0">28<br>
    	3.<input type="radio" name="answer" value="0">15<br>
    	4.<input type="radio" name="answer" value="1">29<br>
    	5.<input type="radio" name="answer" value="0">79<br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
