   
<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next8"]))
    {?>
     

        <br>Jaká SPZ byla na obrázku?<br>

        <form action="next9.php" method="post" name="next9">
        
       
        <input type="radio" name="answer" value="0"><img src="../obr/cz3.png" width="192" height="50"> <br>
        <input type="radio" name="answer" value="0"> <img src="../obr/spz3.jpg" width="192" height="50"><br>
       <input type="radio" name="answer" value="0"> <img src="../obr/spz4.jpg" width="192" height="50"><br>
       <input type="radio" name="answer" value="1"><img src="../obr/spz2.jpg" width="192" height="50"><br>
        <input type="radio" name="answer" value="0"> <img src="../obr/cz2.png" width="192" height="50"><br>
        <input type="radio" name="answer" value="0">Ani jedna.<br>
        
        <input type="submit" name="next9" value="Odpovědět" />
        </form>

<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>