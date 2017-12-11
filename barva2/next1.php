<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barvy 2</title>
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
        $_SESSION["ans0"] = 0;
        if(isset($_POST["answer1"]))
        {
            $answer = trim($_POST["answer1"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        if(isset($_POST["answer2"]))
        {
            $answer = trim($_POST["answer2"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        if(isset($_POST["answer3"]))
        {
            $answer = trim($_POST["answer3"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        if(isset($_POST["answer4"]))
        {
            $answer = trim($_POST["answer4"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        if(isset($_POST["answer5"]))
        {
            $answer = trim($_POST["answer5"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        if(isset($_POST["answer6"]))
        {
            $answer = trim($_POST["answer6"]);
             $_SESSION["ans0"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans0"] += 0;

        }
        ?>

<div id=tst align=center>

  <a href="https://imgbb.com/"><img src="https://image.ibb.co/dGPN2w/Pride_Logo.png" alt="Pride_Logo" border="0" width="400" height="400"></a>

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
