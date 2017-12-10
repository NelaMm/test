
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testBar1"]))
    {

        ?>

<div id=tst align=center>

    Jako první Vám budou zobrazny obrázky (viz níže), po stisknutí tlačítka "Další" Vám budou zobrazeny možnosti odpovědí týkající se předchozích obrázků, ze kterých vyberete jednu či více možností. Po stisknutí tlačítka "Odpovědět" budou zobrazeny obrázky k další otázce.<br>

        <br>


<div id=tst align=center>
<table>
 <tr>
    <td bgcolor="#000000"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#cd75b8"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#f0f036"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#888988"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#30f059"> &nbsp &nbsp &nbsp &nbsp</td>
  </tr>
</table>


        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>

<div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>