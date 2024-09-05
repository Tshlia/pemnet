<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><h1>Operasi Matematika dan Perhitungan Variable</h1></title>
</head>
<body>
    <h3>Operasi Matematika dan Perhitungan Variable</h3>
    
    <?php 
    $a = 6;
    $b = 6;
    $c = 2;
    $d = 2;
    $e = 2;

    echo "<p>Nilai a : $a</p>"; 
    echo "<p>Nilai b : $b</p>";
    echo "<p>Nilai c : $c</p>";
    echo "<p>Nilai d : $d</p>";
    echo "<p>Nilai e : $e</p>";

    $result =  (($a + $b) / ($c * $d)) - $e;

    echo "<h7>Hasil Perhitungan : <h7>";
    echo "<p>((a + b) / (c * d)) - e = $result</p>";

    $x = 6;
    $y1 = 1;
    $y2 = 2;
    $y3 = 2.5;
    $y4 = 4;
    $y5 = 0;
    $y6 = 5;
    $y7 = 3;

    echo "<h7><p> Penjumlahan dan Pengurangan : <p></h7>";
    echo "<p> $x + $y1 = " . ($x + $y1) . "</p>";
    echo "<p> $x - $y1 = " . ($x - $y1) . "</p>";

    echo "<h7><p> Perkalian : <p></h7>";
    echo "<p> $x * $y2 = " . ($x * $y2) . "</p>";
    echo "<p> $x * $y3 = " . ($x * $y3) . "</p>";

    echo "<h7><p> Pembagian : <p></h7>";
    echo "<p> $x / $y4 = " . ($x / $y4) . "</p>";
    echo "<p> $x / $y4.$y5 = " . ($x / $y4) . "</p>";
    echo "<p> $x % $y6 = " . ($x % $y6) . "</p>";
    echo "<p> $x % $y4 = " . ($x % $y4) . "</p>";
    echo "<p> $x % $y7 = " . ($x % $y7) . "</p>";
    
    ?>
</body>
</html>