<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>



      <a href="https://imgbb.com/"><img width="240" class="edge" src="https://image.ibb.co/bVg8aG/1cisla2a.png" alt="1cisla2a" border="0"></a>
          	<br>Které číslo schází?<br>
    	<h2><br>Které číslo schází?<br></h2>

      <form action="next3.php" method="post" name="next3" >

      <input type="radio" name="answer" value="0">18<br>
    	<input type="radio" name="answer" value="0">16<br>
    	<input type="radio" name="answer" value="0">51<br>
    	<input type="radio" name="answer" value="0">89<br>
    	<input type="radio" name="answer" value="1">15<br>

        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
