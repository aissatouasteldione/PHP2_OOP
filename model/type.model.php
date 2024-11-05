<?php
require_once("../core/Model.php");

class TypeModel extends Model
{
    public function __construct()
    {
        $this->ouvrirConnexion();
        $this->table = "type";
    }

    public function save(array $type): int
    {
        extract($type);
        
        return $this->executeUpdate("INSERT INTO `type` (`nomType`) VALUES ('$nomType');");
    }

    public function findByNameType(string $nameType): array|false
    {
        return $this->executeSelect("SELECT * FROM $this->table where nomType like $nameType",true);
        
    }
}
