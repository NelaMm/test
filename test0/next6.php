   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>
<div id=tst align=center>
<br>Označte původně zelená pole.<br>

<style>
table, td {
    border: 1px solid black;
}
</style>

<form action="next7.php" method="post" name="next7">
<table>
 <tr>
    <td>
        <input type="radio" name="answer1" value="1"> 
    </td>
    <td>
        <input type="radio" name="answer2" value="1">
    </td>
    <td> 
        <input type="radio" name="answer3" value="-1">
    </td>
  </tr>
  <tr>
    <td>
        <input type="radio" name="answer4" value="1">
    </td>
     <td>
        <input type="radio" name="answer5"  value="-1"> 
    </td>
    <td> 
        <input type="radio" name="answer6" value="1">
    </td>
  </tr>
  <tr>
    <td>
     <input type="radio" name="answer7" value="-1">
 </td>
     <td>
      <input type="radio" name="answer8" value="-1">
  </td>
    <td> 
        <input type="radio" name="answer9" value="1">
    </td>
  </tr>
</table>


        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>