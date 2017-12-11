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

          <input type="radio" name="answer" value="0">
            <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/mPk6Ub/obr11.png" alt="obr11" border="0"></a>
          <br>

        	<input type="radio" name="answer" value="1">
          <a href="https://ibb.co/j56fpb"><img width="100" height="100" src="https://preview.ibb.co/hH4BvG/obr3.png" alt="obr3" border="0"></a>
        <br>

        	<input type="radio" name="answer" value="0">
          <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/j8FUhw/obr7.png" alt="obr7" border="0"></a>
        <br>

        	<input type="radio" name="answer" value="0">
          <a href="https://ibb.co/bwyRUb"><img width="100" height="100" src="https://preview.ibb.co/gL3t9b/obr9.png" alt="obr9" border="0"></a>
        <br>

        	<input type="radio" name="answer"  value="0">
          <a href="https://imgbb.com/"><img width="100" height="100" src="https://preview.ibb.co/hDHLpb/obr8.gif" alt="obr8" border="0"></a>
        <br>


        <input type="submit" name="next1" value="Odpovědět" />
        </form>
    </div>

<?php


    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
