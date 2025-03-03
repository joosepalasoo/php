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
    <h1>ülesanne 7</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
	function tervita(){
		return "Tere päiksekene!";	
	}
    echo tervita();
    ?>  

    <h1>ülesanne 7.2</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
     function Uudiskiri(){
        echo "<div class='form-group'>
            <label for='exampleInputEmail1'>Email aadress</label>
            <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Sisesta email'>
            <small id='emailHelp' class='form-text text-muted'>Müüme teie emaili info EESTLASTELE MAHA</small>
            <button type='submit' class='btn btn-primary'>Liitu</button>
        </div>";
    }
    Uudiskiri();
    echo "<br><br>";
    ?> 
    
    


    <h1>ülesanne 7.3</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
    function Kasutaja($kasutaja){
        echo strtolower($kasutaja)."@hkhk.edu.ee";
        echo "<br>";
        echo substr(sha1(mt_rand()),5,7);
    }
    Kasutaja("JOOSEP");
    echo "<br><br>";
    ?> 
    
    



    <h1>ülesanne 7.4</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
    function Arvud(){
        echo "<form action='#' method='get'>
            <div class='form-group'>
                <label for='min'>Minimaalne arv</label>
                <input type='number' name='min' id='min' class='form-control' value='min' />
            </div>
            <div class='form-group'>
                <label for='max'>Maksimaalne arv</label>
                <input type='number' name='max' id='max' class='form-control' value='max' />
            </div>
            <div class='form-group'>
                <label for='step'>Sammupikkus</label>
                <input type='number' name='step' id='step' class='form-control' value='step' />
            </div>
            <input type='submit' value='Saada' class='btn btn-primary'/>
        </form>";
        if (isset($_GET['min']) && isset($_GET['max']) && isset($_GET['step'])){
            for ($i = $_GET['min']; $i <= $_GET['max']; $i+=$_GET['step']) {
                echo $i." ";
            }
        }
    }
    Arvud();
    echo "<br><br>";
    ?> 
    
    



    <h1>ülesanne 7.5</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
        function Pindala($kylg1, $kylg2){
            echo "Ristküliku pindala on ".$kylg1 * $kylg2;
        }
        echo "<form action='#' method='get'>
            <div class='form-group'>
                <label for='kylg1'>Külg 1</label>
                <input type='number' name='kylg1' id='kylg1' class='form-control' value='kylg1' />
            </div>
            <div class='form-group'>
                <label for='kylg2'>Külg 2</label>
                <input type='number' name='kylg2' id='kylg2' class='form-control' value='kylg2' />
            </div>
            <input type='submit' value='Saada' class='btn btn-primary'/>
            </form>";
        if (isset($_GET['kylg1']) && isset($_GET['kylg2'])){
            Pindala($_GET['kylg1'], $_GET['kylg2']);
        }
        echo "<br><br>";
    ?>  





    <h1>ülesanne 7.6</h1>
        <!--h07  -->
        <!--joosep alasoo it-23-->
        <!--03.03.25-->
    <?php
    
    ?> 
    
    



    <h1>ülesanne 7.7</h1>
    <!--h07  -->
    <!--joosep alasoo it-23-->
    <!--03.03.25-->
    <?php
                     function isikukood(){
                    echo "<form action='#' method='get'>
                        <div class='form-group'>
                            <label for='isikukood'>Isikukood</label>
                            <input type='number' name='isikukood' id='isikukood' class='form-control' value='isikukood' />
                        </div>
                        <input type='submit' value='Saada' class='btn btn-primary'/>
                    </form>";
                    if (isset($_GET['isikukood'])){
                        if (strlen($_GET['isikukood']) == 11){
                            echo "Isikukood on korrektne";
                        } else {
                            echo "Isikukood on vale";
                        }
                        switch (substr($_GET['isikukood'], 0, 1)){
                            case 1:
                                $aasta = "18";
                                $sugu = "mees";
                                break;
                            case 2:
                                $aasta = "18";
                                $sugu = "naine";
                                break;
                            case 3:
                                $aasta = "19";
                                $sugu = "mees";
                                break;
                            case 4:
                                $aasta = "19";
                                $sugu = "naine";
                                break;
                            case 5:
                                $aasta = "20";
                                $sugu = "mees";
                                break;
                            case 6:
                                $aasta = "20";
                                $sugu = "naine";
                                break;
                            default:
                                echo "See pole õige isikukood";
                                break;
                        }
                        echo "<br> Sugu: ".$sugu;
                        echo "<br> Sünd: ".$aasta.substr($_GET['isikukood'], 1, 2);
                    }
                }
                isikukood();
                echo "<br><br>";
    ?>  





    </div>
        




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>