<?php

    class Connexion
    {
        private $db;
        
        CONST HOST = 'localhost';
        CONST DB_NAME = 'blog';
        CONST USER = 'root';
        CONST PSW = '';
        
        function __construct() {
            try {
                $this->setDb(new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USER, self::PSW));
            } catch (Exception $e)
            {
                die ("Une erreur est survenue lors de la connexion à la base de donnée &rarr; " . $e->getMessage());
            }
//            return (new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DB_NAME, self::USER, self::PSW));
        }
        
        function closeConnexion()
        {
            $this->setDb(NULL);
        }
        
        public function getDb() { return $this->db; }
        public function setDb($db) { $this->db = $db; }


        
    }
