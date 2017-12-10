<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>


    	<h2><br>Na kterém obrázku byli 3 žlutí ptáčci?<br></h2>


<form action="next7.php" method="post" name="next7">

      <input type="radio" name="answer" value="1">1<br>
    	<input type="radio" name="answer" value="0">2<br>
    	<input type="radio" name="answer" value="0">3<br>
    	<input type="radio" name="answer" value="0">4<br>

        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
