
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");


    if(isset($_POST["next9"]))//tlacitko
    {
         $_SESSION["ans4"] = 0;
        if(isset($_POST["answer1"]))
        {
            $answer = trim($_POST["answer1"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer2"]))
        {
            $answer = trim($_POST["answer2"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer3"]))
        {
            $answer = trim($_POST["answer3"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer4"]))
        {
            $answer = trim($_POST["answer4"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer5"]))
        {
            $answer = trim($_POST["answer5"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer6"]))
        {
            $answer = trim($_POST["answer6"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer7"]))
        {
            $answer = trim($_POST["answer7"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer8"]))
        {
            $answer = trim($_POST["answer8"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }
        if(isset($_POST["answer9"]))
        {
            $answer = trim($_POST["answer9"]);
             $_SESSION["ans4"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans4"] += 0;

        }

?>
 

<div id=tst align=center>

    
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

    </div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>