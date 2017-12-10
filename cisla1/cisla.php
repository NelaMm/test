<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testCis1"]))
    {

        ?>

        <img src="../obr/1cisla1.png" width="240" class="edge">
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
