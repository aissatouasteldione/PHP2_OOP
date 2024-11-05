<?php
require_once("../model/type.model.php");
require_once("../core/Controller.php");

class TypeController extends Controller
{
    private TypeModel $typeModel;

    public function __construct()
    {
        parent::__construct();
        $this->typeModel = new TypeModel();
        $this->load();
    }

    public function load()
    {
        // $this->layout = "base1";
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == "add-type") {
                unset($_POST['action']);
                unset($_POST['controller']);
                $this->ajouterType($_POST);
            } elseif ($_REQUEST['action'] == "liste-type") {
                $this->listerType();
            } else {
                echo "Action invalide";
            }
        }
    }

    public function ajouterType(array $data): void
    {
        Validator::isEmpty($data["nomType"],"nomType");
        if(Validator::isValide()){
            $type=$this->typeModel->findByNameType($data["nomType"]);
            if($type){
                Validator::add("nomType","la valeur exixte deja");
                session::add("errors",Validator::$errors);
            }else{
                $this->typeModel->save($data);
            }
           
        }else{
            session::add("errors",Validator::$errors);
             }
        parent::redirectToRoute("controller=type&action=liste-type");
        
    }

    public function listerType(): void
    {
        $datas = $this->typeModel->findAll();
        parent::renderView("types/liste", ["types" => $datas]);
    }
}
