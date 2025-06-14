<?php
   // require 'Titulaire.php';

    class Compte{
        //---Attributs
        protected string $_libelle;
        protected float $_solde;
        protected string $_devise;
        protected Titulaire $_titulaire;
        //---magical
        public function __construct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire){
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
        public function set_libelle($libelle){
                $this->_libelle = $libelle;
                return $this;
        }
        public function set_solde($solde){
                $this->_solde = $solde;
                return $this;
        }
        public function set_devise($devise){
                $this->_devise = $devise;
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
        public function crediter(float $creditEuros){
                return $this->_solde += $creditEuros;
        }
        public function debiter(float $debitEuros){
                return $this->_solde -= $debitEuros;
        }
        public function virement(Compte $aCrediter, float $montant){
                $this->debiter($montant);
                $aCrediter->crediter($montant);
                return "OK";
        }
    }