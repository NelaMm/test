
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["cisla4"]))
    {

?>

        <img src="../obr/cisla3.png">
        <br>

        <form action="cisla5.php" method="post" name="next" >
            <td >
                <input type="submit" name="cisla5" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>