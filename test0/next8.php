<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<style>
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #bbb;
}
</style>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next8"]))
    {?>

<div id=tst align=center>
        <h2><br>Jaká SPZ byla na obrázku?<br></h2>

        <form action="next9.php" method="post" name="next9">

          <label>
        <input type="radio" name="answer" value="0">
        <img src="../obr/cz3.png" width="192" height="50">
      </label>
      <br>

      <label>
        <input type="radio" name="answer" value="0">
        <img src="../obr/spz3.jpg" width="192" height="50">
      </label>
      <br>
      <label>
       <input type="radio" name="answer" value="0">
       <img src="../obr/spz4.jpg" width="192" height="50">
     </label>
     <br>
     <label>
       <input type="radio" name="answer" value="1">
       <img src="../obr/spz2.jpg" width="192" height="50">
     </label>
         <br>
         <label>
        <input type="radio" name="answer" value="0">
        <img src="../obr/cz2.png" width="192" height="50">
      </label>
      <br>
        <input type="radio" name="answer" value="0">Ani jedna.<br>

        <input type="submit" name="next9" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
