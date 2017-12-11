<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

 <div id=tst align=center>
 <?php
session_start();
?>
<?php
    ini_set("default_charset", "UTF-8");


if(isset($_POST["next5"]))//tlacitko
    {
         if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans2"] = $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans2"] = 0;

        }


        ?>


        <a href="https://ibb.co/domKhw"><img width="480" class="edge" src="https://preview.ibb.co/i48oaG/4.png" alt="4" border="0"></a>

        <br>


<form action="next6.php" method="post" name="next6" >
    <td >
        <input type="submit" name="next6" value="Další" />
    </td>
</form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
