<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barvy</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testBar"]))
    {

        ?>

<div id=tst align=center>

    Jako první Vám budou zobrazeny obrázky (viz níže),<br>
     po stisknutí tlačítka "Další" Vám budou zobrazeny možnosti odpovědí<br>
      týkající se předchozích obrázků, ze kterých vyberete jednu či více možností.<br>
       Po stisknutí tlačítka "Odpovědět" budou zobrazeny obrázky k další otázce.<br>

        <br>


<div id=tst align=center>
<table>
 <tr>
    <td bgcolor="#79ecd3"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#cd75b8"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#888988"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#f0f036"> &nbsp &nbsp &nbsp &nbsp</td>
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
