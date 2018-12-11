<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Connexion.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/User.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Lib/Constants.php';

    class UserRepository extends User
    {
        private $objConnect;
        
        public function __construct() {
            $connect = new Connexion();
            $this->objConnect = $connect->getDb();
        }
        
        /**
         * 
         * @param type $userData -> array contenant $username et $psw
         */
        public function setUserData($userObj)
        {
//            extract($userData); // Eclate le tableau en $var = value
            parent::setUsername($userObj->getUsername());
            parent::setPsw($userObj->getPsw());
        }
        
        /**
         * Insert $this (extends User) dans la bd
         * @return int : 0 -> Succes, 1 -> Erreur insertion
         */
        public function insertDb()
        {
            $username = parent::getUsername();
            $psw = parent::getPsw();
            
            $query = ("INSERT INTO users(username, psw) VALUES ('$username', '$psw')");
            
            if ($this->objConnect->exec($query) === FALSE)
            {
                return INSERT_FAILED;
            } else 
            {
                return INSERT_SUCCESS;
            }
        }
        
        /**
         * Retourne tous les utilisateurs enregistrés dans la bdd
         * @return array : Tableau contenant 1 objet User pour chaque User de la table
         */
        public function getAllUsers(): array
        {
            $query = "SELECT * FROM Users";
            
            $res = $this->objConnect->query($query);
            
            $allUsers = $res->fetchAll(PDO::FETCH_CLASS, "User");
            
            return $allUsers;
        }
        
        public function exists($user)
        {
            $query = "SELECT * "
                    . "FROM Users "
                    . "WHERE username='{$user->getUsername()}' "
                        . "AND psw='{$user->getPsw()}'";                        
            
            $res = $this->objConnect->query($query);
            
            if (! empty($res->fetchAll()))
            {
                return true;
            } else {
                return false;
            }
        }
        
        
        public function getIdFromUsername($username)
        {
            $query = "SELECT id FROM Users WHERE username = '$username'";
            
            $res = $this->objConnect->query($query);
            
            $userId = $res->fetchAll();
            
            return $userId;
        }
    }
