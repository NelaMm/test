<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testObr"]))
    {

        ?>

        <img src="../obr/1.png" width="480" class="edge">
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>