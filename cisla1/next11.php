<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<div id=tst align=center>
 <?php
session_start();
?>
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["next11"]))//tlacitko
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans5"] = $answer;
           /* if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] = 0;

        }

?>

<a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/mhEuFG/1cisla4.png" alt="1cisla4" border="0"></a>
        <br>


<form action="next12.php" method="post" name="next12" >
    <td >
        <input type="submit" name="next12" value="Další" />
    </td>
</form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
