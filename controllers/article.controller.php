<?php
require_once("../model/categorie.model.php");
require_once("../model/type.model.php");
require_once("../model/article.model.php");
require_once '../core/Controller.php';


class ArticleController extends Controller{

    private ArticleModel $articleModel;
    private CategorieModel $categorieModel;
    private TypeModel $typeModel;
    public function __construct()

    {
        parent::__construct();
        $this->articleModel = new ArticleModel();
        $this->categorieModel = new CategorieModel();
        $this->typeModel = new TypeModel();
        $this->load();
    }
    public function load(){
        {
            // $this->layout = "base1";
            if (isset($_REQUEST['action'])) {
                if ($_REQUEST['action'] == "liste-article") {
                    $this->listerArticle();
                } elseif ($_REQUEST['action'] == "form-article") {
                    $this->chargerFormulaire();
                } elseif ($_REQUEST['action'] == "add-article") {
                    unset($_POST['action']);
                    unset($_POST['controller']);
                    $this->ajouterArticle($_POST);
                }
            } else {
                
                $this->listerArticle();
            
            }
        }
    }

    public function listerArticle(): void
    { 
       
        $this->renderView("articles/liste", ["articles" => $this->articleModel->findAll()]);
    }

    public function saveArticle(array $article): int
    {
        
        $dsn= 'mysql:host=localhost:3306;dbname=gst_cout';
        $username= 'root';
        $password='';
       
        try {
            extract($type);
            $dbh = new PDO($dsn, $username, $password);
            $sql =°
            return $dbh->exec($sql);
          
        } catch (PDOException $e) {
            echo "Erreur de Connexion: " . $e->getMessage();
            return [];
        }
    }

    public function chargerFormulaire(): void
    {
        $this->renderView("articles/form", ["categories" => $this->categorieModel->findAll(), "types" => $this->articleModel->findAll()]);
    }

    public function ajouterArticle(array $data): void
    {
        $this->articleModel->save($data);
        $this->redirectToRoute("controller=article&action=liste-article");
    }
}

?>





 
