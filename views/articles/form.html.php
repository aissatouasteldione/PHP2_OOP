<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel Article</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }
       .container {
            max-width: 600px;
            padding: 20px;
            border-radius: 15px;
            border: 1px solid lightskyblue;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
       .form-group label {
            font-weight: bold;
        }
       .btn-primary {
            background-color: lightskyblue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color.15s ease-in-out,box-shadow.15s ease-in-out;
        }
       .btn-primary:hover {
            background-color: lightskyblue;
            box-shadow: 0 0 10px rgba(0,123,255,.25);
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Nouvel Article</h2>
        <form action="<?=WEBROOT?>" method="post">
            <div class="mb-3">
                <label for="nomArticle" class="form-label">Nom Article</label>
                <input type="text" name="libelle" class="form-control" id="nomArticle" placeholder="Entrez le nom de l'article " required>
            </div>
            <div class="mb-3">
                <label for="qteStock" class="form-label">Quantité Stock</label>
                <input type="number" name="qteStock" class="form-control" id="qteStock" placeholder="Entrez la quantité en stock" min="0" required>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" name="prixAppro" class="form-control" id="prix" placeholder="Entrez le prix" min="0" required>
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <select name="categorie_id" class="form-select form-select-lg mb-3" aria-label="Sélectionnez une catégorie" required>
                    <option selected>Choisissez une catégorie</option>
                    <?php foreach ($categories as $categorie):?>
                        <option value="<?= $categorie['id']?>"><?= $categorie['nomCategorie']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type_id" class="form-select form-select-lg mb-3" aria-label="Sélectionnez un type" required>
                    <option selected>Choisissez un type</option>
                    <?php foreach ($types as $type):?>
                        <option value="<?= $type['id']?>"><?= $type['nomType']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <input type="hidden" name="controller" value="article">
            <input type="hidden" name="action" value="add-article">
            <button type="submit" class="btn btn-primary w-100">Soumettre</button>
        </form>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
