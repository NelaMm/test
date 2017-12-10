<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>

   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>


    	<br>Na kterém obrázku byli 3 žlutí ptáčci?<br>


<form action="next7.php" method="post" name="next7">

      1.<input type="radio" name="answer" value="1">1<br>
    	2.<input type="radio" name="answer" value="0">2<br>
    	3.<input type="radio" name="answer" value="0">3<br>
    	4.<input type="radio" name="answer" value="0">4<br>

        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>