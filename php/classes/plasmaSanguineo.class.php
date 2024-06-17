<?php 
    class PlasmaSanguineo {
        private $idPlasma;
        private $nomeHospital;
        private $plasma;
        
        public function setIdPlasma($idp) {
            $this->idPlasma = $idp;
        }

        public function getIdPlasma() {
            return $this->idPlasma;
        }

        public function setNomeHospital($nh) {
            $this->nomeHospital = $nh;
        }

        public function getNomeHospital() {
            return $this->nomeHospital;
        }

        public function setPlasma($p) {
            $this->plasma = $p;
        }

        public function getPlasma() {
            return $this->plasma;
        }
    }

?>