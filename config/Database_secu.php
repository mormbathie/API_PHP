<?php
class Database {
    // Connexion à la base de données
    private $host = "localhost";
    private $db_name = "api_rest";
    private $username = "root";
    private $password = "";
    public $connexion;

    // getter pour la connexion
    public function getConnection() {
        $this->connexion = null;

        try {
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gérer les erreurs en lançant des exceptions
                PDO::ATTR_EMULATE_PREPARES => false, // Désactiver la préparation émulée des requêtes
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Utiliser le mode de récupération FETCH_ASSOC par défaut
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" // Définir l'encodage des caractères sur UTF-8
            );

            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->connexion = new PDO($dsn, $this->username, $this->password, $options);
        } catch(PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->connexion;
    }
}
