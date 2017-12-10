<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>


<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["test1"]))
    {

        ?>
<div id=tst align=center>
    Souhrnný test se týká všech témat - čísla, obrázky i barvy.<br>
    Jako první Vám budou zobrazny obrázky (viz níže), po stisknutí tlačítka "Další" Vám budou zobrazeny možnosti odpovědí týkající se předchozích obrázků, ze kterých vyberete jednu či více možností. Po stisknutí tlačítka "Odpovědět" budou zobrazeny obrázky k další otázce.<br>
        <img src="../obr/obr7.png" width="100" height="100">
        <img src="../obr/obr9.png" width="100" height="100">
        <img src="../obr/obr4.png" width="100" height="100">
        <img src="../obr/obr8.gif" width="100" height="100">
        <img src="../obr/obr11.png" width="100" height="100">
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>
</div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>