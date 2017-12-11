<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
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
<div id=tst align=center>
  <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/d8qUhw/obr1.png" alt="obr1" border="0"></a>
  <a href="https://ibb.co/dpP0pb"><img width="100" height="100" src="https://preview.ibb.co/mBxaNw/obr5.png" alt="obr5" border="0"></a>
        <a href="https://ibb.co/gEZBvG"><img width="100" height="100" src="https://preview.ibb.co/iJ2aNw/obr2.png" alt="obr2" border="0"></a>
        <a href="https://imgbb.com/"><img width="100" height="100" src="https://preview.ibb.co/ceB22w/obr6.gif" alt="obr6" border="0"></a>
        <a href="https://ibb.co/bwyRUb"><img width="100" height="100" src="https://preview.ibb.co/gL3t9b/obr9.png" alt="obr9" border="0"></a>
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
