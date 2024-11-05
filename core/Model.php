<?php
class Model
{
    protected string  $dsn = 'mysql:host=localhost:3306;dbname=atelier';
    protected $username = 'root';
    protected $password = '';
    protected PDO|NULL $pdo = null;
    protected string $table;

    public function ouvrirConnexion(): void
    {
        try {
            if ($this->pdo == null) {
                $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            }
        } catch (PDOException $e) {
            echo "Erreur de Connexion: " . $e->getMessage();
        }
    }

    public function fermerConnexion(): void
    {
        if ($this->pdo != null) {
            $this->pdo = null;
        }
    }

    protected function executeSelect(string $sql, bool $fetch = false): array|false{
    {
        try {
            $stm = $this->pdo->query($sql);
            return $fetch ? $stm->fetch(PDO::FETCH_ASSOC) : $stm->fetchAll();
        }

        
        catch (PDOException $e) {
            echo "Erreur de Connexion: " . $e->getMessage();
        }
    }
}

    
    public function executeUpdate(string $sql): int
    {
        try {
            return $this->pdo->exec($sql);
        }
       
        catch (PDOException $e) {
            echo "Erreur de Connexion: " . $e->getMessage();
        }
    }

    public function findAll(): array
    {
        return $this->executeSelect("SELECT * FROM $this->table ");
    }
}
