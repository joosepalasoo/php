<!--h01  -->
<!--joosep alasoo it-23-->
<!--14.02.25-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DEMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
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
        //   <!--h02  -->
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
        //   <!--h03  -->
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
        //   <!--h04  -->
        //   <!--joosep alasoo it-23-->
        //   <!--14.02.25-->
        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=sqrt(pow($a,2)+pow($b,2));
        $p=($a+$b+$c);
        $s=($a+$b)/2;
        echo "kolmnurga pindala on $s ja ümbermõõt on $p";
        ?>



    <h1>Harjtus 5</h1>





    <h4>Tüdrukud</h4>
        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--19.02.25-->    
        $tüdrukute_nimed = array("Mari", "Kati", "Eve", "Kadri", "Kersti");
        sort($tüdrukute_nimed);
        echo "Tüdrukute nimed on:<br>";
        foreach ($tüdrukute_nimed as $nimi) {
        echo $nimi . "<br>";
        }

        echo "<br>Esimesed kolm nime on:<br>";
        for ($i = 0; $i < 3; $i++) {
        echo $tüdrukute_nimed[$i] . "<br>";
        }

        echo "<br>Viimane nimi on:<br>";
        echo end($tüdrukute_nimed) . "<br>";

        $random_index = rand(0, count($tüdrukute_nimed) - 1);
        echo "<br>Suvaline nimi on:<br>";
        echo $tüdrukute_nimed[$random_index] . "<br>";
        ?>




    <h4>Autod</h4>

        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--19.02.25-->

        $autod = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
        "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
        "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
        "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
        "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
        "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");


        $vin = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
        "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
        "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
        "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
        "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
        "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
        "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
        "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
        "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
        "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
        "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
        "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
        "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
        "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
        "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

        // autode arv
        $autode_arv = count($autod);
        echo "Autode arv: $autode_arv\n<br>";

        // kas masiivid on ühepikkused
        if (count($autod) === count($vin)) {
            echo "Massiivid on ühepikkused.\n<br>";
        } else {
            echo "Massiivid EI OLE ühepikkused.\n<br>";
        }

        // toyotade ja audide arv
        $toyota = 0;
        $audi = 0;

        foreach ($autod as $auto) {
            if ($auto === "Toyota") {
                $toyota++;
            } elseif ($auto === "Audi") {
                $audi++;
            }
        }

        echo "Toyota: $toyota\n<br>";
        echo "Audi: $audi\n<br>";

        // väiksed vinid
        echo "VIN koodid, mille pikkus on alla 17 märgi:\n<br>";
        foreach ($vin as $kood) {
            if (strlen($kood) < 17) {
                echo $kood . "\n<br>";
            }
        }

        ?>

    <h4>Keskmised palgad</h4>


        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--19.02.25-->
        $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
        $keskmine_palk = array_sum($palgad) / count($palgad);
        echo "Keskmine palk: " . round($keskmine_palk, 2) . " EUR";
        ?>

    <h4>Firmad</h4>
        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--19.02.25-->
        $Firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia","Yombu");

        sort($Firmad);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_firma'])) {
            $removeFirma = trim($_POST['remove_firma']);
            $key = array_search($removeFirma, $Firmad);
            if ($key !== false) {
                unset($Firmad[$key]);
                $Firmad = array_values($Firmad);
            } else {
                echo "<p style='color: red;'>Sellist firmat ei leitud!</p>";
            }
        }
        
        echo "Firmade nimed on:<br>";
        foreach ($Firmad as $firma) {
            echo $firma . "<br>";
        }
        ?>
        <form method="post">
            <label for="remove_firma">Eemalda firma:</label>
            <input type="text" id="remove_firma" name="remove_firma">
            <input type="submit" value="Eemalda">
        </form>

    <h4>riigid</h4>


        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--21.02.25-->
        $riigid =array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
        "Philippines","Canada","Philippines","South Sudan","Brazil",
        "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
        "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
        "Kazakhstan","Cuba","Portugal","Czech Republic");

        $pikkim_nimi = "";
        foreach ($riigid as $riik) {
            if (strlen($riik) > strlen($pikkim_nimi)) {
                $pikkim_nimi = $riik;
            }
        }

        echo "Pikima riigi nimi on: $pikkim_nimi<br>";
        echo "Pikima riigi nime pikkus on: " . strlen($pikkim_nimi) . " märki<br>";
        ?>

    <h4>Hiina nimed</h4>

        <?php
        //   <!--h05  -->
        //   <!--joosep alasoo it-23-->
        //   <!--21.02.25-->
        $hiina_nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
        "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
        "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

        sort($hiina_nimed);

        echo "Esimene nimi on: " . $hiina_nimed[0] . "<br>";
        echo "Viimane nimi on: " . end($hiina_nimed) . "<br>";
        ?>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
</html>
