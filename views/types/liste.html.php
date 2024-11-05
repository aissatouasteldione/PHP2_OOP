<?php
// echo "</pre>";
// var_dump(Session::get("errors"));
// echo "</pre>";
$errors=[];
if(Session::get("errors")){
$errors=Session::get("errors");
  


}
?>
<div class="container mb-5">
    <div class="card mt-5 w-75 m-auto shadow">
        <div class="card-header bg-info text-white">Liste des Types</div>
        <div class="card-body">
            <form class="d-flex flex-wrap align-items-center" method="POST" action="<?= WEBROOT; ?>">
                <div class="col-9">
                    <div class="mb-3">
                        <label for="nomType" class="form-label">Nom Type</label>
                        <input type="text" name="nomType" id="nomType" class="form-control <?=add_class_invalid('nomType')?> " placeholder="Entrez le nom du type" aria-describedby="helpId" required>
                        <div id="ValidationServerUsernameFeedback"class="invalid-feedback">
                            <?=$errors["nomType"]??""?>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                <input type="hidden" name="controller" value="type">
                <input type="hidden" name="action" value="add-type">
            </form>

            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nom Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($types as $type) : ?>
                            <tr>

                                <td><?= $type["id"]; ?></td>
                                <td><?= $type["nomType"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php Session::remove("errors"); ?>