<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Pood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .jumbotron {
            background: linear-gradient(to bottom, #ffebeb, white);
            text-align: center;
            padding: 60px 20px;
        }
        .jumbotron img {
            max-width: 100%;
            height: auto;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }
        .product-card {
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }
        .footer {
            background: black;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="loadPage('home')">E-Pood</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadPage('products')">Tooted</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadPage('contact')">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="loadPage('admin')">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <h1>SUPER ALE</h1>
        <p>-20% kõik tooted!</p>
        <p><a class="btn btn-danger" href="#">Vaata pakkumisi</a></p>
        <img src="image1.jpg" alt="Reklaampilt">
    </div>

    <div class="container">
        <h2 class="text-center">Parimad pakkumised</h2>
        <div class="product-grid" id="products">
            <!-- Tooteandmed laetakse siia CSV-failist -->
        </div>
    </div>

    <div class="footer">Sinu nimi</div>

    <script>
        function loadPage(page) {
            $.ajax({
                url: page + ".html",
                success: function(data) {
                    $('#content').html(data);
                },
                error: function() {
                    $('#content').html('<div class="alert alert-danger">Lehte ei leitud.</div>');
                }
            });
        }

        $(document).ready(function() {
            $.get("products.csv", function(data) {
                const rows = data.split("\n");
                let html = "";
                rows.forEach((row, index) => {
                    if (index > 0) {
                        const cols = row.split(",");
                        if (cols.length >= 3) {
                            html += `<div class='product-card'>
                                        <img src='${cols[0]}' alt='Toode' class='img-fluid'>
                                        <p>${cols[1]}</p>
                                        <p>${cols[2]}€</p>
                                     </div>`;
                        }
                    }
                });
                $("#products").html(html);
            });
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>