<!DOCTYPE>
<html lang="cs">
    <head>
        <title>Ukol s php</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
    //Ukol cast 1.
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

     //Ukol cast 2.
    echo "<br>";
    echo "<br>";
    $YokubjonAskarov = 5;
     $YokubjonAskarov2 = 5;
     if($YokubjonAskarov == $YokubjonAskarov2) {
         echo "Yokubjon Askarov";
     }
    echo "<br>";
    echo "<br>";

    $promenna = 5;
     $promenna2 = 7;
     if($promenna > $promenna2){
         echo "Yokubjon";

     }
     else{
         echo "Askarov";
     }
    echo "<br>";
    echo "<br>";
    if($promenna < 11) {
        echo "Yokubjon";
        if ($promenna2 > 1) {
            echo " Askarov";
        }
    }
    echo "<br>";
    echo "<br>";
    switch($YokubjonAskarov){
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        case 0:
            echo "Nepsal!";
            break;
        case 3:
            echo 3;
            break;
        case 4:
            echo 4;
            break;
        case 5:
            echo 5;
            break;
    }
    echo "<br>";
    echo "<br>";
    $ovoce = array(1 => "Jablko","Citron", "Třešně", "Nektarinky", "Mango", "Pomeranč", "Mandarinky", "Banan", "Švestky", "Meruňka");
    var_dump($ovoce);
    echo "<br>";
    echo "<br>";
    $jidla["Jidla"]["Ovoce"]["Jablko"] = "červené";
    $jidla["Jidla"]["Ovoce"]["Jablko"] = "zelené";
    $jidla["Jidla"]["Ovoce"]["Jablko"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Jablko"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Jablko"] = "nezralé";

    $jidla["Jidla"]["Ovoce"]["Citron"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Citron"] = "zelené";
    $jidla["Jidla"]["Ovoce"]["Citron"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Citron"] = "nezralé";
    $jidla["Jidla"]["Ovoce"]["Citron"] = "malé";

    $jidla["Jidla"]["Ovoce"]["Třešně"] = "červerné";
    $jidla["Jidla"]["Ovoce"]["Třešně"] = "bílé";
    $jidla["Jidla"]["Ovoce"]["Třešně"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Třešně"] = "nezralé";
    $jidla["Jidla"]["Ovoce"]["Třešně"] = "velké";

    $jidla["Jidla"]["Ovoce"]["Nektarinky"] = "červené";
    $jidla["Jidla"]["Ovoce"]["Nektarinky"] = "žlutá";
    $jidla["Jidla"]["Ovoce"]["Nektarinky"] = "malá";
    $jidla["Jidla"]["Ovoce"]["Nektarinky"] = "zralá";
    $jidla["Jidla"]["Ovoce"]["Nektarinky"] = "nezralá";

    $jidla["Jidla"]["Ovoce"]["Mango"] = "červené";
    $jidla["Jidla"]["Ovoce"]["Mango"] = "žlutá";
    $jidla["Jidla"]["Ovoce"]["Mango"] = "velké";
    $jidla["Jidla"]["Ovoce"]["Mango"] = "zralá";
    $jidla["Jidla"]["Ovoce"]["Mango"] = "nezralá";

    $jidla["Jidla"]["Ovoce"]["Pomeranč"] = "oranžové";
    $jidla["Jidla"]["Ovoce"]["Pomeranč"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Pomeranč"] = "velké";
    $jidla["Jidla"]["Ovoce"]["Pomeranč"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Pomeranč"] = "nezralé";

    $jidla["Jidla"]["Ovoce"]["Mandarinky"] = "oranžové";
    $jidla["Jidla"]["Ovoce"]["Mandarinky"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Mandarinky"] = "malé";
    $jidla["Jidla"]["Ovoce"]["Mandarinky"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Mandarinky"] = "nezralé";

    $jidla["Jidla"]["Ovoce"]["Banán"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Banán"] = "zelené";
    $jidla["Jidla"]["Ovoce"]["Banán"] = "velké";
    $jidla["Jidla"]["Ovoce"]["Banán"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Banán"] = "nezralé";

    $jidla["Jidla"]["Ovoce"]["Švestky"] = "červené";
    $jidla["Jidla"]["Ovoce"]["Švestky"] = "nezralé";
    $jidla["Jidla"]["Ovoce"]["Švestky"] = "malé";
    $jidla["Jidla"]["Ovoce"]["Švestky"] = "velké";
    $jidla["Jidla"]["Ovoce"]["Švestky"] = "zralé";

    $jidla["Jidla"]["Ovoce"]["Meruňka"] = "zralé";
    $jidla["Jidla"]["Ovoce"]["Meruňka"] = "žluté";
    $jidla["Jidla"]["Ovoce"]["Meruňka"] = "malé";
    $jidla["Jidla"]["Ovoce"]["Meruňka"] = "velké";
    $jidla["Jidla"]["Ovoce"]["Meruňka"] = "nezralé";

    var_dump($jidla);


    ?>
    </body>
</html>