<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    echo "<h3>Perulangan</h3>";
    echo date("d");
    echo "<br />";
    echo "<br />";
    for($i = 6; $i >= 0; $i--) {
        for($j = $i; $j >= 0; $j--) {
            echo " * ";
        }
        echo "<br />";
    }
    ?>
</body>
</html>