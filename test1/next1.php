<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>


 <?php
session_start();
session_unset(); 
session_destroy(); 
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");

	if(isset($_POST["next1"]))//tlacitko
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans0"] = $answer;
           /* if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] = 0;

        }

        ?>
<div id=tst align=center>
        <img src="../obr/obr1.png" width="100" height="100">
        <img src="../obr/obr5.png" width="100" height="100">
        <img src="../obr/obr2.png" width="100" height="100">
        <img src="../obr/obr6.gif" width="100" height="100">
        <img src="../obr/obr9.png" width="100" height="100">
        <br>

        <form action="next2.php" method="post" name="next2" >
            <td >
                <input type="submit" name="next2" value="Další" />
            </td>
        </form>
</div>
<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>