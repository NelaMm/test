
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");

	if(isset($_POST["next9"]))//tlacitko 
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans4"] = $answer;
           /* if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] = 0;

        }

        ?>



<table>
 <tr>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#FF0000"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#0000FF"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FFF0"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#F000FF"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
</table>

        <br>

        <form action="next10.php" method="post" name="next10" >
            <td >
                <input type="submit" name="next10" value="Další" />
            </td>
        </form>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>