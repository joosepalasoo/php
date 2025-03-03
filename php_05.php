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
            <h1>Ülesanded 05</h1>
            <form>
                otsi: <input type="text" name="otsi"><input type="submit" value="otsi">
            </form>
            <?php
            if (isset($_GET['otsi']))
                $nimi = $_GET['otsi'];
                $nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
                if(in_array($nimi, $nimed)){
                    echo '<div class="alert alert-success" role="alert">
                            leitud
                            </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                            ei leitud
                            </div>';
                }
            
            
            ?>
        </div>
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>