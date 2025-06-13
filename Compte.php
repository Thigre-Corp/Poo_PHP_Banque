<?php
    require 'Titulaire.php';

    class Compte{
        //---Attributs
        private string $_libelle;
        private int $_solde;
        private string $_devise;
        private Titulaire $_titulaire;
        //---magical
        public function __contruct(string $libelle, int $soldeInitial, string $devise, Titulaire $titulaire){
            $this->_libelle = $libelle;
            $this->_solde = $soldeInitial;
            $this->_devise = $devise;
            $this->_titulaire = $titulaire;
            $titulaire->ajouterCompte($this);
        }
        public function __toString(){
            return "Compte de type $this->_libele appartenant à ".$this->_titulaire->getNom();
        }
        //---setter
        public function set_libelle($_libelle){
                $this->_libelle = $_libelle;
                return $this;
        }
        public function set_solde($_solde){
                $this->_solde = $_solde;
                return $this;
        }
        public function set_devise($_devise){
                $this->_devise = $_devise;
                return $this;
        }
        //---getter
        public function get_libelle(){
                return $this->_libelle;
        }
        public function get_solde(){
                return $this->_solde;
        }
        public function get_devise(){
                return $this->_devise;
        }
        public function get_titulaire(){
                return $this->_titulaire;
        }
        //---méthodes
        

    }