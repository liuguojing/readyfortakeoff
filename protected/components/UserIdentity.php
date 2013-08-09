<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	const ERROR_HAS_FILL = 101;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$user = User::model()->findByAttributes(array('email' => $this->username));
 		if ($user === null) {
 			$this->errorCode = self::ERROR_USERNAME_INVALID;
 		} else {
 			if ($user->status != 0) {
 				$this->errorCode = 101;
 			} else{
 				$this->_id = $user->id;
 				$this->setState('isUser' , 1); 	
 				$this->setState('isAdmin' , 0);
 				$this->setState('type1',1);
 				$cookie = new CHttpCookie('id',$user->id);
 				$cookie->expire = time()+60*60*24*30;  //有限期30天
 				Yii::app()->request->cookies['id']=$cookie;
 				
 				$this->setState('email', $user->email);
 				$this->setState('status', $user->status);
 				$this->errorCode = self::ERROR_NONE;
 			}
 		}
		return !$this->errorCode;
	}
	
	public function getId() {
		return $this->_id;
	}
}