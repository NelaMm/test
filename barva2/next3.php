<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barvy 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


 <?php
session_start();
?>
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["next3"]))//tlacitko
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans1"] = $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans1"] = 0;

        }

        ?>
<div id=tst align=center>

  <a href="https://imgbb.com/"><img src="https://image.ibb.co/dNV6Ub/houbari.jpg" alt="houbari" border="0" width="800" height="450"></a>
        <br>

        <form action="next4.php" method="post" name="next4" >
            <td >
                <input type="submit" name="next4" value="Další" />
            </td>
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
