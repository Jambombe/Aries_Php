<?php

    class Article
    {
        private $id;
        private $title;
        private $content;
        private $artDate;
        private $parentBlogId;
        
        
        public function getId() { return $this->id; }
        public function getTitle() { return $this->title; }
        public function getContent() { return $this->content; }
        public function getArtDate() { return $this->artDate; }
        public function getParentBlogId() { return $this->parentBlogId; }
        
        public function setId($id) { $this->id = $id; }
        public function setTitle($title) { $this->title = $title; }
        public function setContent($content) { $this->content = $content; }
        public function setArtDate($artDate) { $this->artDate = $artDate; }
        public function setParentBlogId($parentBlogId) { $this->parentBlogId = $parentBlogId; }


        
        
        
        
        
        
        
        
    }
