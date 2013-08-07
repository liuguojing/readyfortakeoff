<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AdminIdentity extends CUserIdentity
{
	private $_id;
	private $_isAdmin; //是否具有管理权限
	private $_isUser; //是否是前台用户
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		$admin = Admin::model()->findByAttributes(array('role' => $this->username));
 		if ($admin === null) {
 			$this->errorCode = self::ERROR_USERNAME_INVALID;
 		} else {
 			if ($admin->password != $admin->encrypt($this->password)) {
 				$this->errorCode = self::ERROR_PASSWORD_INVALID;
 			} else{
 				$this->_id = $admin->id;
 				$isAdmin = 1;
 				$cookie = new CHttpCookie('id',$admin->id);
 				$cookie->expire = time()+60*60*24*30;  //有限期30天
 				Yii::app()->request->cookies['id']=$cookie;
 				$this->setState('name', $admin->role);
 				$this->setState('isAdmin', $isAdmin);
 				$this->setState('isUser' , 0);
 				
 				$this->errorCode = self::ERROR_NONE;
 			}
 		}
		return !$this->errorCode;
	}
	
	public function getId() {
		return $this->_id;
	}
}