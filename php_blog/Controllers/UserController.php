<?php

    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Entity/User.php';
    require_once filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/Repository/UserRepository.php';

    class UserController
    {
        
        public function newAction($username, $psw)
        {
//            $username = 'admin';
//            $psw = '1234';
                        
            $newUser = new User();            
            $newUser->setUsername($username);
            $newUser->setPsw($psw);
            
            $userRepo = new UserRepository();
            $userRepo->setUserData($newUser);
            
            return $userRepo->insertDb();            
//            return 0;
        }
        
        /**
         * Retourne tous les utilisateurs de la bdd ainsi que le template Twig
         * à utiliser
         * @return type array(array(), Template-path String)
         */
        public function listAction()
        {
            $userR = new UserRepository();
            return array(array('users'=>$userR->getAllUsers()), 'Users/afficher.html');
        }
        
        // Renvoie True si l'utilisateur existe (bon username et mdp)
        // Faux sinon
        public function verifyInfos($user)
        {
            $userRepo = new UserRepository();
            return $userRepo->exists($user);
        }
        
        public function getIdFromUsername($username)
        {
            $userRepo = new UserRepository();
            return $userRepo->getIdFromUsername($username);            
        }

    }