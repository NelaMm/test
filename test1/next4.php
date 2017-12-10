<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next4"]))
    {?>
     <div id=tst align=center>

        <h2><br>Bylo na SPZ číslo 7?<br></h2>

        <form action="next5.php" method="post" name="next5">


       <input type="radio" name="answer" value="1"> ANO<br>
        <input type="radio" name="answer" value="0"> NE<br>


        <input type="submit" name="next5" value="Odpovědět" />
        </form>
    </div>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
