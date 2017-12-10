 
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


        <img src="../obr/4.png" width="480" class="edge">
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