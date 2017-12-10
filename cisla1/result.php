
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");

	if(isset($_POST["result"]))//tlacitko 
    {
        $_SESSION["ans6"] = 0;
        if(isset($_POST["answer1"]))
        {
            $answer = trim($_POST["answer1"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        if(isset($_POST["answer2"]))
        {
            $answer = trim($_POST["answer2"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        if(isset($_POST["answer3"]))
        {
            $answer = trim($_POST["answer3"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        if(isset($_POST["answer4"]))
        {
            $answer = trim($_POST["answer4"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        if(isset($_POST["answer5"]))
        {
            $answer = trim($_POST["answer5"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;
                            
        }
        if(isset($_POST["answer6"]))
        {
            $answer = trim($_POST["answer6"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        if(isset($_POST["answer7"]))
        {
            $answer = trim($_POST["answer7"]);
             $_SESSION["ans6"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans6"] += 0;

        }
        $sum=0;

        foreach ( $_SESSION as $val) {
            $sum += $val;
        }
        $res = round($sum/10*100, 2);
        if($res<0) $res = 0;
        echo "Správnost odpovědí je ".$res."%";//procentualni vysledek na 2 desetinna mista

    
    ?>

 <br>
<a href=../index.php>hlavní stránka</a>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>