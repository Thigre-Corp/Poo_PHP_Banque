<?php

   // require 'Compte.php';

    class Titulaire{
        //---Attribut
        private string $_nom;
        private string $_prenom;
        private DateTime $_dateNaissance;
        private string $_ville;
        protected array $_listeComptes;
        //---magical
        public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance = DateTime::CreateFromFormat('d/m/Y' , $dateNaissance);
            $this->_ville = $ville;
            $this->_listeComptes = [];
        }
        public function __toString(){
            return $this->_prenom." ".$this->_nom." existe.";
        }
        //---setter
        public function set_nom(string $nom){
            $this->_nom = $nom;
            return $this;
        }
        public function set_prenom(string $prenom){
            $this->_prenom = $prenom;
            return $this;
        }
        public function set_dateNaissance(DateTime $dateNaissance){
            $this->_dateNaissance = $dateNaissance;
            return $this;
        }
        public function set_ville(string $ville){
            $this->_ville = $ville;
            return $this;
        }
        //---getter
        public function get_nom() : string{
                return $this->_nom;
        }
        public function get_prenom(){
                return $this->_prenom;
        }
        public function get_dateNaissance(){
                return $this->_dateNaissance;
        }
        public function get_ville(){
                return $this->_ville;
        }
        public function get_listeComptes(){
                return $this->_listeComptes;
        }
        //---méthodes
        public function ajouterCompte(Compte $compte){
            array_push($this->_listeComptes,(array) $compte);
            return $this;
        }
        public function ageTitulaire() : int { 
            $today = new DateTime;
            $age = $today->diff($this->_dateNaissance);
            return $age->y;
        }
    }