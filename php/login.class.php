<?php 
	class Login {
		private $idLogin;
		private $usrLogin;
		private $senhaLogin;

		public function setIdLogin($idl) {
			$this->idLogin = $idl;
		}

		public function getIdLogin() {
			return $this->idLogin;
		}

		//

		public function setUsrLogin($ul) {
			$this->usrLogin = $ul;
		}

		public function getUsrLogin() {
			return $this->usrLogin;
		}

		//

		public function setSenhaLogin($sl) {
			$this->senhaLogin = $sl;
		}
		
		public function getSenhaLogin()  {
			return $this->senhaLogin;
		}
	}

?>