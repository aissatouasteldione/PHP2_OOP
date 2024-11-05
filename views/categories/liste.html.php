<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Catégories</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
      .container {
            max-width: 1200px;
            margin: auto;
            padding-top: 30px;
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
      .btn-submit {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">Liste des Catégories</div>
                    <div class="card-body">
                        <form class="d-flex flex-wrap align-items-center" method="POST" action="<?= WEBROOT; ?>>
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="nomCategorie" class="form-label">Nom Catégorie</label>
                                    <input type="text" name="nomCategorie" id="nomCategorie" class="form-control" placeholder="Entrez le nom de la catégorie" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>

                            <input type="hidden" name="controller" value="categorie">
                            <input type="hidden" name="action" value="add-categorie">
                        </form>

                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        
                                        <th>ID</th>
                                        <th>Nom Catégorie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  foreach ($categories as $categorie) :?>
                                        <tr>
                                           
                                            <td><?= $categorie["id"];?></td>
                                            <td><?= $categorie["nomCategorie"];?></td>
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
