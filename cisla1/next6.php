<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>

<img src="../obr/1cisla3b.png" >
    	<h2><br>Které čísla schází? Ukažte ve správném pořadí.<br></h2>


<form action="next7.php" method="post" name="next7" width="360" class="edge">

      <input type="radio" name="answer" value="0">15, 29, 97<br>
    	<input type="radio" name="answer" value="0">29, 16, 51<br>
    	<input type="radio" name="answer" value="0">16, 29, 51<br>
    	<input type="radio" name="answer" value="1">15, 39, 87<br>
    	<input type="radio" name="answer" value="0">Jiné<br>

        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
