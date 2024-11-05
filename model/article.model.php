<?php
require_once("../core/Model.php");
class ArticleModel extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
        $this->table = "article";
    }

    public function findAll(): array
    {
        return $this->executeSelect("SELECT * FROM `article`a,type t, categorie c WHERE a.type_id=t.id and c.id=a.categorie_id; ");
        
    }

    public function save(array $type): int
    {
        extract($type);
        return $this->executeUpdate("INSERT INTO `article` ( `libelle`, `qteStock`, `prixAppro`, `type_id`, `categorie_id`) VALUES ( '$libelle', '$qteStock', '$prixAppro', '$type_id', '$categorie_id')");
    }
}


    
   
?>
