<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=1;
        while ($a <= 50) {
            $b=$a*$a;
            echo $b;
            echo "<br>";
            $a=$a+1;
        }
    ?>
</body>
</html>