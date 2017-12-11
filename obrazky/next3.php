<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
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

        <a href="https://ibb.co/e451vG"><img width="480" class="edge" src="https://preview.ibb.co/hXQ1vG/3.png" alt="3" border="0"></a>
        <br>

        <form action="next4.php" method="post" name="next4" >
            <td >
                <input type="submit" name="next4" value="Další" />
            </td>
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
