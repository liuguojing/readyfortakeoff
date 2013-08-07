<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	
	public $user;
	public $domain = 'https://app.ya-yaonline.co.uk/gwc/';
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function string2array($string){
		$array = array();
		if(!empty($string)){
			$array = explode(',',$string);
		}
		return $array;
	}
	public function array2string($array){
		$string = '';
		if(is_array($array)){
			$string = implode(',',$array);
		}
		return $string;
	}
	
	public function strtodate($str){
		$dateTime = new datetime;
		try{
			$dateTime = datetime::createfromformat('M/d/Y',$str);
			if(empty($dateTime)){
				return '0000-00-00';
			}else{
				return $dateTime->format('Y-m-d');
			}
		}catch(Exception $e){
			return '0000-00-00';
		}
	
	}
	
	/**
	 * sendmail
	 */
	public function sendMail($to,$title,$user,$view='email',$cc="") {
		// 当发送 HTML 电子邮件时，请始终设置 content-type
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// 更多报头
		$headers .= 'From: Winners Circle Events Team<winners@corporatereg.com>' . "\r\n";
		
		if($view == 'email'){
			//$headers .= "Bcc: Charlene.Johnson-Crooks@gartner.com\n";
		}
		$body = Yii::app()->controller->renderPartial('application.views.user.'.$view, array('model'=>$user), true);
		mail($to, $title, $body, $headers);
		/**
		$mailer = Yii::app()->mailer;
		$mailer->Host = 'smtp.exmail.qq.com';
		$mailer->setPathViews('application.views.user');
		$mailer->IsSMTP();
		$mailer->SMTPAuth = true;
		if($cc!="" && $cc!=null){
			$mailer->AddCC($cc);
		}
		$mailer->From = 'test@brightac.com.cn';
		$mailer->AddReplyTo('winners@corporatereg.com');
		$mailer->AddAddress($to);
		$mailer->FromName = 'Winners Circle Events Team';
		$mailer->Username = 'test@brightac.com.cn';    //这里输入发件地址的用户名
		$mailer->Password = '';    //这里输入发件地址的密码
		$mailer->SMTPDebug = false;   //设置SMTPDebug为true，就可以打开Debug功能，根据提示去修改配置
		$mailer->CharSet = 'UTF-8';
		$mailer->Subject = $title;
		$mailer->IsHTML(true);
		$mailer->getView($view,array('model'=>$user));
		$mailer->Send();
		**/
	}
	public function init(){
		if(!Yii::app()->user->isGuest){
			$this->user = User::model()->findByPk(Yii::app()->user->id);
		}else{
			$this->user = new User();
		}
	}
	
	public function ampm($ampm){
		$result = 'am';
		switch($ampm){
			case 0:$result = 'am';break;
			case 1:$result = 'pm';break;
			case 2:$result = 'am or pm';break;
			case 3:$result = 'am & pm';break;
		}
		return $result;
	}
}