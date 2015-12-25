<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	protected $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
       $Users=Users::model()->find('LOWER(username)=?',array(strtolower($this->username)));
       if (($Users===null) or ($this->password!==$Users->password)) 
       {
        $this->errorCode=self::ERROR_USERNAME_INVALID;
       }else{
        $this->_id=$Users->id;
        $this->username=$Users->username;
        $this->errorCode=self::ERROR_NONE;
       }return !$this->errorCode;
	}
	 public  function getId(){
            return $this->_id;

    }
}