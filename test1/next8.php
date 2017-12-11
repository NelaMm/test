<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test 2</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>



<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next8"]))
    {?>

<div id=tst align=center>
      <h2>  <br>Jaká SPZ byla na obrázku?<br></h2>

        <form action="next9.php" method="post" name="next9">

          <input type="radio" name="answer" value="0">
            <a href="https://ibb.co/k2CaNw"><img width="192" height="50" src="https://preview.ibb.co/hCRPFG/cz3.png" alt="cz3" border="0"></a>
          <br>
            <input type="radio" name="answer" value="0">
            <a href="https://ibb.co/hYRfpb"><img width="192" height="50" src="https://preview.ibb.co/fVyFNw/spz3.jpg" alt="spz3" border="0"></a>
          <br>
           <input type="radio" name="answer" value="0">
           <a href="https://ibb.co/kt5JaG"><img width="192" height="50" src="https://preview.ibb.co/cQYRUb/spz4.jpg" alt="spz4" border="0"></a>
         <br>
           <input type="radio" name="answer" value="0">
           <a href="https://ibb.co/bNCWvG"><img width="192" height="50" src="https://preview.ibb.co/jxSLpb/spz2.jpg" alt="spz2" border="0"></a>
         <br>

            <input type="radio" name="answer" value="0">
            <a href="https://ibb.co/mjP0pb"><img width="192" height="50" src="https://preview.ibb.co/eZ2mUb/cz2.png" alt="cz2" border="0"></a>
          <br>


        <input type="radio" name="answer" value="1">Jiná.<br>

        <input type="submit" name="next9" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
