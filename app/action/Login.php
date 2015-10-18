<?php
class Tutorial_Action_Login extends Ethna_ActionClass{

	public function perform()
    {
		$password = $this->config->get('password');

		if( $password == $this->af->get('password')){
			$this->session->start();
		}

       // return 'Login';
    }

}