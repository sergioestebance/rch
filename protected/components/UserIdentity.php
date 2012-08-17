<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 
	 private $_id = NULL;
	 private $_local = NULL;
	 private $_tipo = NULL;
	 private $_token = NULL;
		 
	public function getId() {
			return $this->_id;
		}

	public function getLocal() {
			return $this->_local;
		}
	public function getTipo() {
			return $this->_tipo;
		}	
	public function getToken() {
        return $this->_token;
    }
	public function setToken($local) {
        $this->_local=$local;
    }
	 
	public function authenticate()
	{
		$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
			$this->errorCode=self::ERROR_NONE;
			
			//INICIO DE SESION
			$session=new CDbHttpSession;
			$session->open();
			$session['local']='colon';
			$session['tipo']=$user->tipo;
			$session['username']=$user->username;
			$session['token']=$user->hashPassword($user->id,'62182048fd9cf9176');
		}
		return $this->errorCode==self::ERROR_NONE;

	}
}

?>