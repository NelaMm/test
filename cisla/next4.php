<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>


      <a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/h41Khw/cisla3a.png" alt="cisla3a" border="0"></a>
  <br>Které čísla schází?<br>
    	<h2><br>Které čísla schází?<br></h2>

        <form action="next5.php" method="post" name="next5">


       <input type="checkbox" name="answer1" value="-1">48<br>
        <input type="checkbox" name="answer2" value="1">47<br>
       <input type="checkbox" name="answer3" value="-1">67<br>
       <input type="checkbox" name="answer4" value="-1">91<br>
        <input type="checkbox" name="answer5" value="-1">53<br>
        <input type="checkbox" name="answer6" value="1">63<br>
        <input type="checkbox" name="answer7" value="-1">Jiné<br>

        <input type="submit" name="next5" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
