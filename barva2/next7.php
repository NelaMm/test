
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["next7"]))//tlacitko
    {
         $_SESSION["ans3"] = 0;
        if(isset($_POST["answer1"]))
        {
            $answer = trim($_POST["answer1"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer2"]))
        {
            $answer = trim($_POST["answer2"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer3"]))
        {
            $answer = trim($_POST["answer3"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer4"]))
        {
            $answer = trim($_POST["answer4"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer5"]))
        {
            $answer = trim($_POST["answer5"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer6"]))
        {
            $answer = trim($_POST["answer6"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer7"]))
        {
            $answer = trim($_POST["answer7"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer8"]))
        {
            $answer = trim($_POST["answer8"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }
        if(isset($_POST["answer9"]))
        {
            $answer = trim($_POST["answer9"]);
             $_SESSION["ans3"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans3"] += 0;

        }

?>



<style>
table, td {
    border: 1px solid black;
}
</style>

<div id=tst align=center>
<table>
 <tr>
    <td bgcolor="#0000FF"> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
  <tr>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
     <td bgcolor="#0000FF"> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#FF0000"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"> &nbsp &nbsp &nbsp &nbsp</td>
     <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
</table>


<form action="next8.php" method="post" name="next8" >
    <td >
        <input type="submit" name="next8" value="Další" />
    </td>
</form>
</div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>