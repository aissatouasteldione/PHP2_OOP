<?php
require_once("../core/Model.php");

class CategorieModel extends Model
{

    public function findAll(): array
    {
      
        $dsn = 'mysql:host=localhost:3306;dbname=gst_cout';
        $username = 'root';
        $password = '';
        try {
            $dbh = new PDO($dsn, $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM categorie";
            $stm = $dbh->query($sql);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur de Connexion: " . $e->getMessage();
            return [];
        }
    }

    public function save(array $categorie): int
    {
        extract($categorie);
        return $this->executeUpdate("INSERT INTO 'categorie' ('nomCategorie') VALUES ('$nomCategorie');");
    }
}

