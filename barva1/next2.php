<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barvy</title>
<link rel="stylesheet" type="text/css" href="../style.css">   
</head>
   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next2"]))
    {?>
        <div id=tst align=center>

        <br>Která barva nebyla na obrázku?<br>

        <form action="next3.php" method="post" name="next3">
      
    <td bgcolor="#ff0000"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#cd75b8"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#888988"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#f0f036"> &nbsp &nbsp &nbsp &nbsp</td>
   
      <table> <td bgcolor="#FF0000"><input type="radio" name="answer" value="0"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#ffff00"><input type="radio" name="answer" value="0">  &nbsp &nbsp &nbsp &nbsp</td> </table>
       <table> <td bgcolor="#e764aa"><input type="radio" name="answer"  value="1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#0183f8"> <input type="radio" name="answer" value="0"> &nbsp &nbsp &nbsp &nbsp</td></table>
       
        <br><input type="submit" name="next3" value="Odpovědět" />
        </form>
    </div>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>