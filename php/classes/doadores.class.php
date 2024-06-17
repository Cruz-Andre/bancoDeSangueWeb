<?php 
	class Doadores {
		private $idDoador;
		private $nomeDoador;
		private $tipoSanguineoDoador;
		private $dataNascimentoDoador;
		private $cepDoador;
		private $bairroDoador;
		private $cidadeDoador;
		private $ufdoador;
		private $emailDoador;
		private $dataUltimaDoacao;

		public function setIdDoador($idd) {
			$this->idDoador = $idd;
		}
		
		public function getIdDoador() {
			return $this->idDoador;
		}

		//

		public function setNomeDoador($nd) {
			$this->nomeDoador = $nd;
		}
		
		public function getNomeDoador() {
			return $this->nomeDoador;
		}

		// 

		public function setTipoSanguineoDoador($ts) {
			$this->tipoSanguineoDoador = $ts;
		}

		public function getTipoSanguineoDoador() {
			return $this->tipoSanguineoDoador;
		}

		// 

		public function setDataNascimentoDoador($dn) {
			$this->dataNascimentoDoador = $dn;
		}

		public function getDataNascimentoDoador() {
			return $this->dataNascimentoDoador;
		}

		public function getDataNascimentoDoadorFormatada() {
			return date("d/m/Y", strtotime($this->dataNascimentoDoador));
		}

		// 

		public function setCepDoador($cepd) {
			$this->cepDoador = $cepd;
		}
		
		public function getCepDoador() {
			return $this->cepDoador;
		}

		// 

		public function setBairroDoador($bd) {
			$this->bairroDoador = $bd;
		}

		public function getBairroDoador() {
			return $this->bairroDoador;
		}

		//

		public function setCidadeDoador($cid) {
			$this->cidadeDoador = $cid;
		}

		public function getCidadeDoador() {
			return $this->cidadeDoador;
		}

		//

		public function setUfdoador($ufd) {
			$this->ufdoador = $ufd;
		}

		public function getUfdoador() {
			return $this->ufdoador;
		}

		//

		public function setEmailDoador($ed) {
			$this->emailDoador = $ed;
		}

		public function getEmailDoador() {
			return $this->emailDoador;
		}

		//

		public function setDataUltimaDoacao($dud) {
			$this->dataUltimaDoacao = $dud;
		}

		public function getDataUltimaDoacao() {
			return $this->dataUltimaDoacao;
		}

		public function getDataUltimaDoacaoFormatada() {
			return date("d/m/Y", strtotime($this->dataUltimaDoacao));
		}
	}
?>