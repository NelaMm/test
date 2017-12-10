<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>
   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next12"]))
    {?>
     
        <img src="../obr/cisla4a.png" width="360" class="edge">
    	<br>Které čísla schází?<br>

        <form action="result.php" method="post" name="result">
        
       
       1.<input type="checkbox" name="answer1" value="1">63<br>
        2.<input type="checkbox" name="answer2" value="-1">69<br>
       3.<input type="checkbox" name="answer3" value="-1">26<br>
       4.<input type="checkbox" name="answer4" value="-1">25<br>
        5.<input type="checkbox" name="answer5" value="1">16<br>
        6.<input type="checkbox" name="answer6" value="1">36<br> 
        7.<input type="checkbox" name="answer7" value="-1">33<br>
        8.<input type="checkbox" name="answer8" value="-1">57<br>
        9.<input type="checkbox" name="answer9" value="-1">Jiné<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>