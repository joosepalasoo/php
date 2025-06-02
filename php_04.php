        <!-- Harjutus 4 -->
        <!-- Joosep Alasoo IT-23 -->
        <!-- 02.06.25 -->
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ülesanded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Harjutus 04</h1>

    <form method="get" class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Arv1</label>
            <input type="number" class="form-control" name="arv1">
        </div>
        <div class="mb-3">
            <label class="form-label">Arv2</label>
            <input type="number" class="form-control" name="arv2">
        </div>
        <button type="submit" class="btn btn-primary">Arvuta</button>
    </form>

    <?php
    if (isset($_GET['arv1']) && isset($_GET['arv2']) && $_GET['arv1'] !== "" && $_GET['arv2'] !== "") {
        $arv1 = (float)$_GET['arv1'];
        $arv2 = (float)$_GET['arv2'];

        echo "<hr>";

        // Jagamine
        if ($arv2 == 0) {
            echo '<div class="alert alert-danger">Nulliga ei saa jagada</div>';
        } else {
            $tulemus = $arv1 / $arv2;
            echo "<div class='alert alert-success'>Tubli!<br>$arv1 / $arv2 = " . round($tulemus, 2) . "</div>";
        }

        // Võrdlus
        if ($arv1 > $arv2) {
            echo '<div class="alert alert-info">Arv1 on suurem!</div>';
        } elseif ($arv1 < $arv2) {
            echo '<div class="alert alert-info">Arv1 on väiksem!</div>';
        } else {
            echo '<div class="alert alert-info">Arvud on võrdsed!</div>';
        }

        // Kujundi määramine
        if ($arv1 == $arv2) {
            echo '<div class="alert alert-warning">Tegemist on ruuduga!<br>
            <img width="50" src="https://d1nhio0ox7pgb.cloudfront.net/_img/o_collection_png/green_dark_grey/64x64/plain/shape_square.png"></div>';
        } else {
            echo '<div class="alert alert-warning">Tegemist on ristkülikuga!<br>
            <img width="50" src="https://cdn-icons-png.flaticon.com/512/5895/5895916.png"></div>';
        }

        // Juubel
        echo ($arv1 % 5 == 0)
            ? '<div class="alert alert-success">JUUBEL!</div>'
            : '<div class="alert alert-secondary">Ei ole juubel!</div>';

        // Punktide hinnang
        echo "<div class='mt-2'><strong>Punktide hinnang: </strong>";
        if ($arv1 >= 10) {
            echo 'SUPER';
        } elseif ($arv1 >= 5) {
            echo 'TEHTUD!';
        } else {
            echo 'Kasin!';
        }
        echo "</div>";

    } elseif (isset($_GET['arv1']) || isset($_GET['arv2'])) {
        // Kui vorm on saadetud, aga andmed puuduvad või osaliselt täidetud
        echo '<div class="alert alert-danger mt-4">Paha poiss! Sisesta mõlemad arvud!</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
