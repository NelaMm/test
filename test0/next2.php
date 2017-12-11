<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>
        <div id=tst align=center>
          <a href="https://ibb.co/fSoRUb"><img width="100" height="100" src="https://preview.ibb.co/euDt9b/obr10.png" alt="obr10" border="0"></a>


        <br>Byla tato značka mezi obrázky?<br>

        <form action="next3.php" method="post" name="next3">

        Ano<input type="radio" name="answer" value="0">
        Ne<input type="radio" name="answer" value="1">

        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>
    </div>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
