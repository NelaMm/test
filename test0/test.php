
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["test"]))
    {

        ?>

<div id=tst align=center>
     <img src="../obr/obr1.png" width="100" height="100">
        <img src="../obr/obr5.png" width="100" height="100">
        <img src="../obr/obr7.png" width="100" height="100">
        <img src="../obr/obr8.gif" width="100" height="100">
        <img src="../obr/obr11.png" width="100" height="100">
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>

<div>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>