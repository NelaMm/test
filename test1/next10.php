<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next10"]))
    {?>
<div id=tst align=center>
      <h2>  <br>Které barvy byly na obrázku?<br></h2>

        <form action="next11.php" method="post" name="next11">


      <table> <td bgcolor="#00FF00"><input type="checkbox" name="answer1" value="1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#FFFF0"><input type="checkbox" name="answer2" value="-1">  &nbsp &nbsp &nbsp &nbsp</td> </table>
       <table> <td bgcolor="#000000"><input type="checkbox" name="answer3"  value="1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#0000FF"> <input type="checkbox" name="answer4" value="1"> &nbsp &nbsp &nbsp &nbsp</td></table>
        <table> <td bgcolor="#00FFF0"><input type="checkbox" name="answer5" value="-1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <input type="checkbox" name="answer6" value="-1">Ani jedna.<br>

        <input type="submit" name="next11" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
