<?php
ini_set("default_charset", "UTF-8");
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test krátkodobé paměti</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<div id="test">

    <h1>Test krátkodobé paměti</h1>

    <table align="center">
     <form action="stat/stat.html" method="post" name="stats" >
            <td>
                <input  class="button" type="submit" name="stats" value="Statistiky" />
            </td>
        </form>
    </table>

    <br>
    <br>
      <h2>Souhrnné testy</h2>

    <table align="center">
    <form action="test0/test.php" method="post" name="test0/test" >
        <td >
            <input  class="button" type="submit" name="test" value="Test 1" />
        </td>
    </form>
      <form action="test1/test1.php" method="post" name="test1/test1" >
        <td >
            <input class="button" type="submit" name="test1" value="Test 2" />
        </td>
        </form>
        </table>
        <br><br><br>
    <h2>Témata</h2>

<h3>Čísla</h3>


<table align="center">

</table>
<table align="center">

 <form action="cisla/cisla.php" method="post" name="testCis" >
     <td>
    <input  class="button" type="submit" name="testCis" value="1" />
     </td>
</form>

<form action="cisla1/cisla.php" method="post" name="testCis1" >
<td>
    <input  class="button" type="submit" name="testCis1" value="2" />
</td>
</form>

</table>

<h3>Barvy</h3>

<table align="center">
 <form action="barva1/testBar.php" method="post" name="barva1/testBar" >
        <td >
            <input  class="button" type="submit" name="testBar" value="1" />
        </td>
    </form>
     <form action="barva2/testBar.php" method="post" name="barva2/testBar" >
        <td >
            <input  class="button" type="submit" name="testBar1" value="2" />
        </td>
    </form>
</table>

<h3>Obrázky</h3>

<table align="center">
 <form action="obrazky/obrazky.php" method="post" name="testObr" >
        <td >
            <input  class="button" type="submit" name="testObr" value="1" />
        </td>
    </form>
</table>




</div>
