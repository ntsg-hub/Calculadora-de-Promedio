<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagina.css">
</head>
<body>
    

    <?php
        echo "<div class='caja1'>";

            echo '<div class="caja2">';

                $tienda1 = $_POST["1"];
                $tienda2 = $_POST["2"];
                $tienda3 = $_POST["3"];
                
                echo "<p>El precio promedio es: </p>", ($tienda1+$tienda2+$tienda3)/3 ;

            echo "</div>";

        echo "</div>";
    ?>


</body>
</html>