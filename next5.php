 
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

<style>
table, td {
    border: 1px solid black;
}
</style>

<table>
 <tr>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
  <tr>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
     <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
  <tr>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
     <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#00FF00"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
</table>


<form action="next6.php" method="post" name="next6" >
    <td >
        <input type="submit" name="next6" value="Další" />
    </td>
</form>

<?php

        //print_r($array);
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }
?>