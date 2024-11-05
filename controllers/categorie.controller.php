<?php
require_once("../model/categorie.model.php");
require_once("../core/Controller.php");

class CategorieController extends Controller
{
    private CategorieModel $categorieModel;

    public function __construct()
    {
        parent::__construct();
        $this->categorieModel = new CategorieModel();
        $this->load();
    }

    public function load()
    {
        // $this->layout = "base1";
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == "add-categorie") {
                unset($_POST['action']);
                unset($_POST['controller']);
                $this->ajouterCategorie($_POST);
            } elseif ($_REQUEST['action'] == "liste-categorie") {
                $this->listerCategorie();
            } else {
                echo "Action invalide";
            }
        }
    }

    public function ajouterCategorie(array $data): void
    {
        $this->categorieModel->save($data);
        header("Location: " . WEBROOT . "/?controller=categorie&action=liste-categorie");
        exit();
    }

    public function listerCategorie(): void
    {
        $datas = $this->categorieModel->findAll();
        
        $this->renderView("categories/liste", ["categories" => $datas]);
    }
}
