   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next10"]))
    {?>
<div id=tst align=center>
        <br>Které barvy byly na obrázku?<br>

        <form action="next11.php" method="post" name="next11">
        
       
      <table> <td bgcolor="#00FF00"><input type="radio" name="answer1" value="1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#FFFF0"><input type="radio" name="answer2" value="-1">  &nbsp &nbsp &nbsp &nbsp</td> </table>
       <table> <td bgcolor="#000000"><input type="radio" name="answer3"  value="1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#0000FF"> <input type="radio" name="answer4" value="1"> &nbsp &nbsp &nbsp &nbsp</td></table>
        <table> <td bgcolor="#00FFF0"><input type="radio" name="answer5" value="-1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <input type="radio" name="answer6" value="-1">Ani jedna.<br>

        <input type="submit" name="next11" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>