   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next"]))
    {?>
<div id=tst align=center>
        <br>Které barvy byly na obrázku?<br>

        <form action="next1.php" method="post" name="next1">
        
    <td bgcolor="#79ecd3"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#cd75b8"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#888988"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#f0f036"> &nbsp &nbsp &nbsp &nbsp</td>
    <td> &nbsp &nbsp &nbsp &nbsp</td>
    <td bgcolor="#30f059"> &nbsp &nbsp &nbsp &nbsp</td>
       
      <table> <td bgcolor="#FF0000"><input type="checkbox" name="answer1" value="-1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#888988"><input type="checkbox" name="answer2" value="1">  &nbsp &nbsp &nbsp &nbsp</td> </table>
       <table> <td bgcolor="#000000"><input type="checkbox" name="answer3"  value="-1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <table><td bgcolor="#79ecd3"> <input type="checkbox" name="answer4" value="1"> &nbsp &nbsp &nbsp &nbsp</td></table>
        <table> <td bgcolor="#0000FF"><input type="checkbox" name="answer5" value="-1"> &nbsp &nbsp &nbsp &nbsp</td> </table>
        <input type="checkbox" name="answer6" value="-1">Ani jedna.<br>

        <input type="submit" name="next1" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>