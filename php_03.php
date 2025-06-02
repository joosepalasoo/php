<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ülesanded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Harjutus 3</h1>
        <!-- Harjutus 3 -->
        <!-- Joosep Alasoo IT-23 -->
        <!-- 02.06.25 -->
        <form method="get" action="#">
            <div class="row">
                <div class="col-sm-6">
                    <p>Trapetsi alus: <input type="number" name="alus1"></p>
                    <p>Trapetsi teine alus: <input type="number" name="alus2"></p>
                    <p>Trapetsi kõrgus: <input type="number" name="korgus"></p>
                </div>
                <div class="col-sm-6">
                    <p>Rombi külg: <input type="number" name="kulg"></p>
                </div>
            </div>
            <input type="submit" value="Arvuta" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['alus1']) && isset($_GET['alus2']) && isset($_GET['korgus'])) {
            $a1 = (float)$_GET['alus1'];
            $a2 = (float)$_GET['alus2'];
            $h = (float)$_GET['korgus'];
            $trapets = ($a1 + $a2) / 2 * $h;
            echo "<p>Trapetsi pindala on " . round($trapets, 1) . " cm²</p>";
        }

        if (isset($_GET['kulg'])) {
            $k = (float)$_GET['kulg'];
            $romb = $k * 4;
            echo "<p>Rombi ümbermõõt on " . round($romb, 1) . " cm</p>";
        }
        ?>
    </div>
</body>
</html>
