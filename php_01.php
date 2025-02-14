<!--h01  -->
<!--joosep alasoo it-23-->
<!--14.02.25-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DEMO</title>
  </head>
  <body>
<h1>Harjutus 1</h1>
  <?php
    //   <!--h01  -->S
    //   <!--joosep alasoo it-23-->
    //   <!--14.02.25-->
    $nimi="Joosep";
    $sa=2007;
    $tahtkuju="veevalaja";

    echo "$nimi $sa $tahtkuju<br>";
    echo '"It\'s My Life" - Dr. Alban<br>';
    echo "(\(\\<br>";
    echo "(-.-)<br>";
    echo 'o_(")(")<br>';
    ?>

<h1>Harjutus 2</h1>
    <?php
    //   <!--h01  -->
    //   <!--joosep alasoo it-23-->
    //   <!--14.02.25-->
    $a=10;
    $b=20;
    printf("%d + %d = %d<br>",$a,$b, $a+$b);
    printf("%d - %d = %d<br>",$a,$b, $a+$b);
    printf("%d * %d = %d<br>",$a,$b, $a+$b);
    printf("%d / %d = %.2f<br>",$a,$b, $a+$b);
    ?>
    

<h1>Harjutus 3</h1>
<form>
    Number (mm) <input type="number" name="nr"><br>
    <input type="submit" value="teisenda"><br>     
</form>
<?php
    //   <!--h01  -->
    //   <!--joosep alasoo it-23-->
    //   <!--14.02.25-->
    $nr=$_GET['nr'];
    printf ("%dmm on %0.2f cm<br>", $nr, $nr/10);
    printf ("%d mm on %0.2f m<br>", $nr, $nr/1000);
    ?>
<h1>kolmnurk</h1>
<form>
    a <input type="number" name="a"><br>
    b <input type="number" name="b"><br>
    <input type="submit" value="teisenda"><br>     
</form>
    
    <?php
    //   <!--h01  -->
    //   <!--joosep alasoo it-23-->
    //   <!--14.02.25-->
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=sqrt(pow($a,2)+pow($b,2));
    $p=($a+$b+$c);
    $s=($a+$b)/2;
    echo "kolmnurga pindala on $s ja ümbermõõt on $p";
    ?>






  </body>
</html>