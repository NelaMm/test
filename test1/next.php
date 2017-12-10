<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>
    	<div id=tst align=center>
    	<h2><br>Která značka nebyla v obrázcích?<br></h2>

        <form action="next1.php" method="post" name="next1">

        <input type="radio" name="answer" value="0"><img src="../obr/obr11.png" width="100" height="100"><br>
    	<input type="radio" name="answer" value="1"><img src="../obr/obr3.png" width="100" height="100"><br>
    	<input type="radio" name="answer" value="0"><img src="../obr/obr7.png" width="100" height="100"><br>
    	<input type="radio" name="answer" value="0"><img src="../obr/obr9.png" width="100" height="100"><br>
    	<input type="radio" name="answer" value="0"><img src="../obr/obr8.gif" width="100" height="100"><br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>
    </div>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
