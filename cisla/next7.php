<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

 <?php
session_start();
?>
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["next7"]))//tlacitko
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans3"] = $answer;
           /* if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] = 0;

        }

?>

<a href="https://imgbb.com/"><img width="360" class="edge" src="https://image.ibb.co/dwLC2w/cisla3.png" alt="cisla3" border="0"></a>
        <br>


<form action="next8.php" method="post" name="next8" >
    <td >
        <input type="submit" name="next8" value="Další" />
    </td>
</form>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
