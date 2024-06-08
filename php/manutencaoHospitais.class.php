<?php 
    class ManutencaoHospitais {
        private $idHospital;
        private $nomeHospital;
        private $aPos;
        private $aNeg;
        private $bPos;
        private $bNeg;
        private $abPos;
        private $abNeg;
        private $oPos;
        private $oNeg;

        public function setIdHospital($idh) {
            $this->idHospital = $idh;
        }

        public function getIdHospital() {
            return $this->idHospital;
        }

        public function setNomeHospital($nh) {
            $this->nomeHospital = $nh;
        }

        public function getNomeHospital() {
            return $this->nomeHospital;
        }

        public function setAPos($ap) {
            $this->aPos = $ap;
        }

        public function getAPos() {
            return $this->aPos;
        }

        public function setANeg($an) {
            $this->aNeg = $an;
        }

        public function getANeg() {
            return $this->aNeg;
        }

        public function setBPos($bp) {
            $this->bPos = $bp;
        }

        public function getBPos() {
            return $this->bPos;
        }

        public function setBNeg($bn) {
            $this->bNeg = $bn;
        }

        public function getBNeg() {
            return $this->bNeg;
        }

        public function setABPos($abp) {
            $this->abPos = $abp;
        }

        public function getABPos() {
            return $this->abPos;
        }

        public function setABNeg($abn) {
            $this->abNeg = $abn;
        }

        public function getABNeg() {
            return $this->abNeg;
        }

        public function setOPos($op) {
            $this->oPos = $op;
        }

        public function getOPos() {
            return $this->oPos;
        }

        public function setONeg($on) {
            $this->oNeg = $on;
        }

        public function getONeg() {
            return $this->oNeg;
        }
    }

?>