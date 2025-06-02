<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
            <!--h01-02-->
            <!--joosep alasoo it-23-->
            <!--02.06.25-->
    <h1>Harjutus 1</h1>
    <?php
echo '"It\'s My life - Dr.Alban"<br>';
echo "<br>";
echo "(\(\<br>(-.-)<br>o_(\")(\")";

?>

<h1>Harjutus 2</h1>


<h2>Teisendamine</h2>


<form action="php01.php" method="get">
    a <input type="number" name="a"><br>
    b <input type="number" name="b"><br>
    <input type="submit" value="Teisenda"><br>

<?php

if(isset($_GET["a"])&&isset($_GET["b"])){
    $kylg_a = $_GET["a"];
    $kylg_b = $_GET["b"];
    $kylg_c = sqrt($kylg_a**2 + $kylg_b**2);
    $pindala = $kylg_a * $kylg_b / 2;
    $ymbermoot = $kylg_a+$kylg_b+$kylg_c;
    printf("Külg A:%d<br>Külg B:%d<br>Pindala:%d<br>Ümbermõõt:%d", $kylg_a, $kylg_b, $pindala, $ymbermoot);
}

?>



<h2>Millimeetrid</h2>

<form action="php01.php" method="get">
    mm <input type="number" name="mm"><input type="submit" value="Teisenda"><br>


<?php


    if(isset($_GET["ts"])){
        $mm = $_GET["ts"];
        echo $mm;
        printf("%ts on %dcm või %f.2fm", $ts, $mm/10, $mm/1000);
    }


echo "<h2>Liitmine</h2>";


$a = 5;

$b = 7;

    printf("%d + %d = %d<br>",$a, $b, $a+$b);
    printf("%d - %d = %d<br>",$a, $b, $a-$b);
    printf("%d / %d = %.2f<br>",$a, $b, $a/$b);
    printf("%d * %d = %d<br>",$a, $b, $a*$b);
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>