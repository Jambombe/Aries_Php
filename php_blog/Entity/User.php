<?php

    class User
    {
        private $id;
        private $username;
        private $psw;
        
        
        public function getId() { return $this->id; }
        public function getUsername() { return $this->username; }
        public function getPsw() { return $this->psw; }
        
        public function setId(int $id) { $this->id = $id; }
        public function setUsername(string $username) { $this->username = $username; }
        public function setPsw(string $psw) { $this->psw = $psw; }
        
    }
