<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    //Intro
    <h1>
        Hypertext PreProcessor
    </h1>

    <?php
    echo "Halo Duniaaa"
    ?>

    <?php
    //2. Comments
    echo "<h3>2. Comments</h3>";
    //Komen bae kayak cef juna

    # Komen bae kayak sadewa

    /* Komen bae kayak 
    komentator*/
    ?>

    <?php
    //3. Variabel
    echo "<h3>3. Variabel</h3>";
    $klub = "Arsenal";
    $hobi = "kasih harapan palsu ke penggemarnya";

    echo "<h2>$klub</h2>";
    echo "<h2>$hobi</h2>";
    ?>
    
    <br>

    <?php
    //4. Tipe data
    echo "<h3>4. Tipe Data</h3>";
    $x = 5;
    var_dump($x);

    $x = "Hello world!";
    $y = 'Hello world!';

    echo "<br>";
    var_dump($x);

    echo "<br>";
    var_dump($y);

    echo "<br>";
    ?>

    <br>

    <?php
    //5. Strings
    echo "<h3>5. Strings</h3>";
    echo "Hello $klub";
    echo 'Hello';
    ?>

    <br>

    <?php
    //6. Numbers
    echo "<h3>6. Numbers</h3>";
    $a = 5;
    $b = 5.34;
    $c = "25";
    ?>

    <br>

    <?php
    //7. Casting
    echo "<h3>7. Casting</h3>";
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = false;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (int) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($e);
    ?>

    <br>

    <?php
    //8. Matematika
    echo "<h3>8. Maths</h3>";

    echo (min(0, 150, 30, 20, -8, -200));
    echo "<br>";

    echo (max(0, 150, 30, 20, -8, -200));
    echo "<br>";

    echo (abs(-6.7));
    echo "<br>";

    echo (sqrt(64));
    echo "<br>";

    echo (round(0.60));
    echo "<br>";
    ?>

    <br>

    <?php
    // Operators
    echo "<h3>9. Operators</h3>";
    $x = 10;
    $y = 6;

    echo $x - $y;
    echo "<br>";
    echo $x + $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";

    //Equal
    $x = 100;
    $y = "100";
    var_dump($x == $y); // returns true because values are equal

    echo "<br>";

    //Unequal
    var_dump($x === $y); // returns false because types are not equal
    ?>

    <br>

    <?php
    //10. If, If Else
    echo "<h3>10. Percabangan (Conditional)</h3>";
    if (5 > 3) {
        echo "Have a good day!";
    }

    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>

    <br>

    <?php
    //11. Switch
    echo "<h3>11. Switch</h3>";
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>

    <br>

    <?php
    //12. Array
    echo "<h3>12. Array</h3>";
    $klub = array("Arsenal", "Bournemouth", "Chelsea");

    print_r($klub);
    ?>

    <br>

    <?php
    //13. Loop For
    echo "<h3>13. Loop (for)</h3>";
    for ($x = 0; $x <= 55; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <br>

    <?php
    //14. Function
    echo "<h3>14. Func</h3>";
    function familyName($fname)
    {
        echo "$fname Fufufafa.<br>";
    }

    familyName("Jai Ethes");
    familyName("Mulyono");
    familyName("SangPisang");
    familyName("Gilbran");
    familyName("Ganyang");
    ?>

    <br>

    <?php
    //15. Tabel
    echo "<h3>15. Tabel</h3>";
    echo "<table border = '1'>";

    $pemain = array("Hokky Caraka", "Marselino Ferdinan", "Rafael Struick", "Rizky Ridho", "Nathan Tjoe-A-On");
    $posisi = array("ST", "LW", "ST", "CB", "CM");
    $jumlahGol = array("1", "2", "1", "1", "0");
    echo "<tr><th>Pemain</th><th>Posisi</th><th>Jumlah Gol</th></tr>";

    for ($i = 0; $i <= 4; $i++) {
        echo "<tr><td> $pemain[$i] </td> <td> $posisi[$i] </td> <td>$jumlahGol[$i]</td></tr>";
    }
    echo "<table>";
    ?>
</body>

</html>