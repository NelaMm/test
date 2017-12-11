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
  <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/d8qUhw/obr1.png" alt="obr1" border="0"></a>
  <a href="https://ibb.co/dpP0pb"><img width="100" height="100" src="https://preview.ibb.co/mBxaNw/obr5.png" alt="obr5" border="0"></a>
  <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/j8FUhw/obr7.png" alt="obr7" border="0"></a>
  <a href="https://imgbb.com/"><img width="100" height="100" src="https://preview.ibb.co/hDHLpb/obr8.gif" alt="obr8" border="0"></a>
  <a href="https://imgbb.com/"><img width="100" height="100" src="https://image.ibb.co/mPk6Ub/obr11.png" alt="obr11" border="0"></a>

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
