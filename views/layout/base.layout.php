<!doctype html>
<html lang="en">

<head>
    <title>Projet Php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Projet php</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= WEBROOT?>/controller=article&?action=liste-article" aria-current="page">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= WEBROOT?>/controller=approvisionnement&?action=liste-approvisionnement" aria-current="page"">Approvisionnement</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= WEBROOT?>/controller=article&?action=liste-article" aria-current="page" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                T/C
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= WEBROOT?>/?controller=type&action=liste-type">Types</a>
                                <a class="dropdown-item" href="<?= WEBROOT?>/?controller=categorie&action=liste-categorie">Catégories</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <main class="container my-5">
        <?php
            echo $contentView;
       ?>
    </main>
    <!-- Optional JavaScript; choose one of the two -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMmW6U" crossorigin="anonymous"></script>
</body>
</html>
