<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Obrázky</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testObr"]))
    {

        ?>

        <a href="https://ibb.co/mjhs2w"><img width="480" class="edge" src="https://preview.ibb.co/dGA1vG/1.png" alt="1" border="0"></a>
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
