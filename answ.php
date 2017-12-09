
  
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["answ"]))//tlacitko odmitnout
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
            if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";
        }
        else{
            echo "nic";
        }
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=index.php>hlavní stránku</a>.</p>");
    }
?>