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
        <h1>genereeri 1-100</h1>
        <!--h06  -->
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
      </div>
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>