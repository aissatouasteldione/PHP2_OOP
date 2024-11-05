<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
       .container {
            max-width: 1200px;
            margin: auto;
            padding-top: 15px;
        }
       .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,.1);
        }
       .card-header {
            font-size: 18px;
            font-weight: bold;
        }
       .table-responsive {
            overflow-x: auto;
            max-width: 100%;
        }
        th, td {
            vertical-align: middle;
        }
       .btn-new {
            float: right;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">Liste des Articles</div>
                    <div class="card-body">
                        <div class="btn-new">
                            <a href="<?= WEBROOT?>/?controller=article&action=form-article" class="btn btn-outline-info btn-sm" role="button">Nouveau</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nom Article</th>
                                        <th>Quantité Stock</th>
                                        <th>Prix</th>
                                        <th>Catégorie</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($articles as $article):?>
                                        <tr>
                                            <td><?= htmlspecialchars($article["libelle"])?></td>
                                            <td><?= htmlspecialchars($article["qteStock"])?></td>
                                            <td><?= htmlspecialchars($article["prixAppro"])?></td>
                                            <td><?= htmlspecialchars($article["nomCategorie"])?></td>
                                            <td><?= htmlspecialchars($article["nomType"])?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
