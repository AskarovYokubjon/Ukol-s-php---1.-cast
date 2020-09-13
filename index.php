<!DOCTYPE>
<html lang="cs">
    <head>
        <title>Ukol s php</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
     $test1 = "Ahoj!";
     var_dump($test1);
     echo "<br>";
     echo "<br />";
     $test2 = 35;
     var_dump($test2);
     echo "<br>";
     echo "<br />";
     $test3 = true;
     var_dump($test3);
     echo "<br>";
     echo "<br>";
     $test3 = 0.11;
     var_dump($test3);
     echo "<br>";
     echo "<br>";
     echo "<img src='obyva.jpg' alt='php' width='300' height='auto'>";
     echo "<br>";
     echo "<br>";
     echo "\\";
     echo "<br>";
     echo "<br>";
     $testA = "1. cast retezcu";
     $testB = " a 2. cast retezcu";
     var_dump($testA     . $testB);
    ?>
    </body>
</html>