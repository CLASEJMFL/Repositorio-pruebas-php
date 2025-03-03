<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x=0;
        for ($i=1; $i < 100; $i++) { 
            echo($i);
            echo"<br>";
            $x=$x+$i;
        }
        echo($x);
    ?>
</body>
</html>