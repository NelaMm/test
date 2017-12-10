
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testCis"]))
    {

?>

        <img src="../obr/cisla1.png">
        <br>

        <form action="cisla1.php" method="post" name="next" >
            <td >
                <input type="submit" name="cisla1" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>