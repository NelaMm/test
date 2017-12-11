<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next12"]))
    {?>

  <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/iqFvNw/cisla4a.png" alt="cisla4a" border="0"></a>
    	<h2><br>Které čísla schází?<br></h2>

        <form action="result.php" method="post" name="result">


       <input type="checkbox" name="answer1" value="1">63<br>
        <input type="checkbox" name="answer2" value="-1">69<br>
       <input type="checkbox" name="answer3" value="-1">26<br>
       <input type="checkbox" name="answer4" value="-1">25<br>
        <input type="checkbox" name="answer5" value="1">16<br>
        <input type="checkbox" name="answer6" value="1">36<br>
        <input type="checkbox" name="answer7" value="-1">33<br>
        <input type="checkbox" name="answer8" value="-1">57<br>
        <input type="checkbox" name="answer9" value="-1">Jiné<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
