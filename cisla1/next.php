<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>

      <a href="https://imgbb.com/"><img width="240" class="edge" src="https://image.ibb.co/mCFqpb/1cisla1a.png" alt="1cisla1a" border="0"></a>
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
