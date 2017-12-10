<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
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
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] = 0;

        }

?>

      <h2>  <br>Pamatuješ si na jakém obrázku byl žlutý ptáček z první otázky?<br></h2>


<form action="result.php" method="post" name="result" >
     <input type="radio" name="answer" value="0">1<br>
    	<input type="radio" name="answer" value="1">2<br>
    	<input type="radio" name="answer" value="0">3<br>
    	<input type="radio" name="answer" value="0">4<br>

        <input type="submit" name="result" value="Odpovědět a vyhodnotit" />
</form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>
