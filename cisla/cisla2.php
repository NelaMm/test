<?php
session_start();
session_unset(); 
session_destroy(); 
session_start();
?> 

<?php
    ini_set("default_charset", "UTF-8");

	if(isset($_POST["cisla2"]))//tlacitko
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

        <img src="../obr/cisla2.png">
        <br>

        <form action="cisla3.php" method="post" name="cisla3" >
            <td >
                <input type="submit" name="cisla3" value="Další" />
            </td>
        </form>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>