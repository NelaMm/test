<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["test"]))
    {

        ?>

<div id=tst align=center>
  Souhrnný test se týká všech témat - čísla, obrázky i barvy.<br>
  Vaším úkolem je zapamatovat si z obrázků co nejvíce informací.<br>
  Po stisknutí tlačítka "Další" Vám budou zobrazeny možnosti odpovědí<br>
  týkající se předchozích obrázků, ze kterých vyberete jednu či více možností.<br> Po stisknutí tlačítka "Odpovědět" budou zobrazeny obrázky k další otázce.<br>
     <img src="../obr/obr1.png" width="100" height="100">
        <img src="../obr/obr5.png" width="100" height="100">
        <img src="../obr/obr7.png" width="100" height="100">
        <img src="../obr/obr8.gif" width="100" height="100">
        <img src="../obr/obr11.png" width="100" height="100">
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input class="button" type="submit" name="next" value="Další" />
            </td>
        </form>

<div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
