<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>

<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>


    	<h2><br>Na kterém obrázku se nacházel žlutý ptáček?<br></h2>

        <form action="next1.php" method="post" name="next1">

        <input type="radio" name="answer" value="0">1<br>
    	<input type="radio" name="answer" value="1">2<br>
    	<input type="radio" name="answer" value="0">3<br>
    	<input type="radio" name="answer" value="0">4<br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
