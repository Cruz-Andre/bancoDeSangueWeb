<?php 
	class Login {
		private $usrLogin;
		private $senhaLogin;

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