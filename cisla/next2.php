<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>



          <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/dRRkNw/cisla2a.png" alt="cisla2a" border="0"></a>
    	<h2><br>Které číslo schází?<br></h2>

      <form action="next3.php" method="post" name="next3">

      <input type="radio" name="answer" value="0">83<br>
    	<input type="radio" name="answer" value="1">98<br>
    	<input type="radio" name="answer" value="0">15<br>
    	<input type="radio" name="answer" value="0">89<br>
    	<input type="radio" name="answer" value="0">55<br>

        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
