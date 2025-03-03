<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1>ülesann 6.1</h1>
        <!--h06.1  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 10 == 1) {
            echo '<div class="row">';
        }
        echo '<div class="col-sm-1">' . $i . '.</div>';
        if ($i % 10 == 0) {
            echo '</div>';
        }
    }

    ?>  



        <h1>ülesanne 6.2</h1>
        <!--h06.2  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '* ';
        }
        ?>
        

        <h1>ülesanne 6.3</h1>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '*<br>';
        }
        ?>
        <h1>ülesanne 6.4</h1>
        <?php
        for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 6; $j++) {
            echo '* ';
        }
        echo '<br>';
        }
        ?>
        <h1>ülesanne 6.5</h1>
        <?php
        for ($i = 10; $i >= 2; $i--) {
            if ($i % 2 == 0) { 
                echo $i . '<br> ';
            }
        }
        ?>
        <h1>ülesanne 6.6</h1>
        <?php
        for ($i = 100; $i >= 2; $i--) {
            if ($i % 3 == 0) { 
                echo $i . '<br> ';
            }
        }
        ?>
        <h1>ülesanne 6.7</h1>
        <?php
        $poisid = array('juhan', 'miku', 'uku', 'joosep', 'mihkel');
        $tüdrukud = array('mari', 'kati', 'juuli', 'brigitta', 'kristina');
        for ($i = 0; $i < count($poisid); $i++) {
            echo $poisid[$i] . ' ja ' . $tüdrukud[$i] . '<br>';
        }
        ?>

        
        







      </div>
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>