
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["cisla6"]))
    {

?>

        <img src="../obr/cisla4.png">
        <br>

        <form action="cisla7.php" method="post" name="next" >
            <td >
                <input type="submit" name="cisla7" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>