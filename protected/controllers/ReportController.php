<?php

class ReportController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/report';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
				'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('login'),
						'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('index','registation','download','nomination','transfer','transferDownload'),
						'users'=>array('@'),
						'expression' => '$user->isAdmin'
				),
// 				array('allow', // allow authenticated user to perform 'create' and 'update' actions
// 						'actions'=>array('winner','travel','hotel','tours','summary','registation',
// 								'housing','transfer','arrival','departure','dietary','download','teamdinner','galadinner',
// 								'galatable','printers','dmc','newRegistration','declined','cancelled','amex','users','dmcdownload','traveluser',
// 								'exportTeamDietary','exportGalaDietary','meal','libbys','exportLibbys','housinguser'),
// 						'users'=>array('@'),
// 						'expression' => '$user->isAdmin && ($user->name=="client" || $user->name=="YYO" || $user->name=="Caroline" || $user->name=="Dickie")'
// 				),
// 				array('allow', // allow authenticated user to perform 'create' and 'update' actions
// 						'actions'=>array('transfer','arrival','departure','dmcdownload','amex','traveluser'),
// 						'users'=>array('@'),
// 						'expression' => '$user->isAdmin && $user->name=="Amex"'
// 				),
// 				array('allow', // allow authenticated user to perform 'create' and 'update' actions
// 						'actions'=>array('dmc','newRegistration','declined','cancelled'),
// 						'users'=>array('@'),
// 						'expression' => '$user->isAdmin && $user->name=="DMC"'
// 				),
// 				array('allow', // allow authenticated user to perform 'create' and 'update' actions
// 						'actions'=>array('dietary','teamdinner','galadinner','galatable','meal','libbys','exportLibbys','exportTeamDietary'),
// 						'users'=>array('@'),
// 						'expression' => '$user->isAdmin && $user->name=="NTE"'
// 				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('create','update','index','view','admin','delete'),
						'users'=>array('admin'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	
	public function actionLogin(){
		$this->layout = false;
		$model=new Admin;
		
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		
		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			if($model->validate() && $model->login()){
				$this->redirect(array('report/index'));
			}else{
				Yii::app()->user->setFlash('error','Password Error!');
			}
		}
		$this->render('login',array('model'=>$model));
	}
	
	public function actionDietary()
	{
		$teamDinners = array();
		$galaDinners = array();
		$dbCommand = Yii::app()->db->createCommand("SELECT team_dinner, team_dinner_dietary, count(1) AS num FROM 
				( SELECT team_dinner_dietary, team_dinner FROM users WHERE team_dinner IS NOT NULL AND team_dinner <> '' and status = 1
				UNION ALL 
				SELECT g.team_dinner_dietary, g.team_dinner FROM guests g,users user WHERE g.team_dinner IS NOT NULL AND g.team_dinner <> ''  and g.user_id= user.id and user.status = 1 and user.has_guest = 1 
				) AS a GROUP BY team_dinner, team_dinner_dietary ORDER BY team_dinner, team_dinner_dietary");
		$result = $dbCommand->queryAll();
		if(isset($result)){
			foreach($result as $item){
				$teamDinners[$item['team_dinner']][$item['team_dinner_dietary']]=$item['num'];
			}
		}


		$dbCommand = Yii::app()->db->createCommand("select gala_dinner_dietary,count(1)  num,team_dinner from
				(select team_dinner_dietary as gala_dinner_dietary,team_dinner from users where status = 1 and team_dinner IS NOT NULL AND team_dinner <> '' and gala_dinner_vip <> 'Gala Dinner VIP' 
				union all select g.team_dinner_dietary as gala_dinner_dietary,g.team_dinner from guests g,users u where g.user_id = u.id and u.status = 1 and u.has_guest = 1 and 
				g.team_dinner IS NOT NULL AND g.team_dinner <> '' and u.gala_dinner_vip <>'Gala Dinner VIP'
		) as a
				group by team_dinner,gala_dinner_dietary order by team_dinner,gala_dinner_dietary ");
		$gala = $dbCommand->queryAll();
		
		$dbCommand = Yii::app()->db->createCommand("select gala_dinner_dietary,count(1) as num,team_dinner  from
				(select team_dinner_dietary as gala_dinner_dietary,team_dinner from users where status = 1 and team_dinner IS NOT NULL AND team_dinner <> '' and gala_dinner_vip = 'Gala Dinner VIP' 
				union all select g.team_dinner_dietary as gala_dinner_dietary,g.team_dinner from guests g,users u where g.user_id = u.id  and u.status = 1 and u.has_guest = 1  and g.team_dinner IS NOT NULL AND g.team_dinner <> '' and u.gala_dinner_vip = 'Gala Dinner VIP'
		) as a
				group by team_dinner,gala_dinner_dietary order by team_dinner,gala_dinner_dietary ");
		$gala_vip = $dbCommand->queryAll();
		if(isset($gala)){
			foreach($gala as $item){
				$galaDinners[$item['team_dinner']][$item['gala_dinner_dietary']] = $item['num'];
			}
		}
		if(isset($gala_vip)){
			foreach($gala_vip as $item){
				$galaDinners['Vip'][$item['gala_dinner_dietary']] = $item['num'];
			}
		}
		$this->render('dietary',array('teamDinners'=>$teamDinners,'galaDinners'=>$galaDinners));
	}

	public function actionDownload()
	{
		$users = User::model()->with('nomination')->findAll();
		$attributes_string = 'id,status,name,display_name,job_title,department,employee_number,telephone,mobile_telephone,personal_or_business_number,emergency_contact_name,emergency_contact_telephone_number,email,twitter_account,special_requirements,specific_medical_conditions,office,outbound_time,return_time,created_at,do_question,donot_question,develop_question';
		$attributes = explode(',',$attributes_string);
		$data = array(
				1 =>array_merge( $attributes , array('quality','value','innovation','trust','service','team','ITLT Award') ),
		);
		foreach($users as $user){
			$tmp = array();
			foreach($attributes as $attribute){
				$tmp[] = CHtml::encode($user->$attribute);
			}
			if(!isset($user->nomination)){
				$user->nomination = new Nomination();
			}
			$tmp[] = CHtml::encode($user->nomination->quality);
			$tmp[] = CHtml::encode($user->nomination->value);
			$tmp[] = CHtml::encode($user->nomination->innovation);
			$tmp[] = CHtml::encode($user->nomination->trust);
			$tmp[] = CHtml::encode($user->nomination->service);
			$tmp[] = CHtml::encode($user->nomination->team);
			$tmp[] = CHtml::encode($user->nomination->itlt_award);
			$data[] = $tmp;
		}
		Yii::import('application.extensions.phpexcel.JPhpExcel');
		$xls = new JPhpExcel('UTF-8', false, 'All User');
		$xls->addArray($data);
		$xls->generateXML('all_users');
		Yii::app()->end();
		$this->layout = '//layouts/export';
	}
	
	public function actionTransferDownload($type="",$option=""){
		if($type == 'outbound'){
			$users = User::model()->with('nomination')->findAll("outbound_time=:outbound_time and status = 1",array(':outbound_time'=>$option));
		}elseif($type =='return'){
			$users = User::model()->with('nomination')->findAll("return_time=:return_time and status = 1",array(':return_time'=>$option));
		}
		$attributes_string = 'id,status,name,display_name,job_title,department,employee_number,telephone,mobile_telephone,personal_or_business_number,emergency_contact_name,emergency_contact_telephone_number,email,twitter_account,special_requirements,specific_medical_conditions,office,outbound_time,return_time,created_at,do_question,donot_question,develop_question';
		$attributes = explode(',',$attributes_string);
		$data = array(
				1 =>array_merge( $attributes , array('quality','value','innovation','trust','service','team','ITLT Award') ),
		);
		foreach($users as $user){
			$tmp = array();
			foreach($attributes as $attribute){
				$tmp[] = CHtml::encode($user->$attribute);
			}
			if(!isset($user->nomination)){
				$user->nomination = new Nomination();
			}
			$tmp[] = CHtml::encode($user->nomination->quality);
			$tmp[] = CHtml::encode($user->nomination->value);
			$tmp[] = CHtml::encode($user->nomination->innovation);
			$tmp[] = CHtml::encode($user->nomination->trust);
			$tmp[] = CHtml::encode($user->nomination->service);
			$tmp[] = CHtml::encode($user->nomination->team);
			$tmp[] = CHtml::encode($user->nomination->itlt_award);
			$data[] = $tmp;
		}
		Yii::import('application.extensions.phpexcel.JPhpExcel');
		$xls = new JPhpExcel('UTF-8', false, 'All User');
		$xls->addArray($data);
		$xls->generateXML('transfer_users');
		Yii::app()->end();
	}


	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionRegistation($status=1)
	{
		$accepted_number = User::model()->countByAttributes(array('status'=>1));
		$nofeedback_number = User::model()->countByAttributes(array('status'=>0));
		$declined_number = User::model()->countByAttributes(array('status'=>2));
		
		$this->render('registation',array(
				'accepted'=>$accepted_number,'nofeedback'=>$nofeedback_number,'declined'=>$declined_number,
				'status'=>$status,
				));
	}

	public function actionTours()
	{
		$this->render('tours');
	}
	
	public function actionTransfer()
	{
		$outbounds = User::model()->findAllBySql("select distinct(outbound_time) as outbound_time,count(1) as id from users where status=1 group by outbound_time");
		$returns = User::model()->findAllBySql("select distinct(return_time) as return_time,count(1) as id from users where status=1 group by return_time");
		$this->render('transfer',array('outbounds'=>$outbounds,'returns'=>$returns));
	}
	/**
	 * fi_adate  Arrival Date Into Sydney
	 */
	public function actionArrival(){
		$dates = array();
		$result = array();
		$arrivalDates = User::model()->findAllBySql("select distinct(fi_adate) fi_adate from users where status = 1 and type <>'Operating Committee' order by fi_adate");
		foreach ($arrivalDates as $date){
			$dates[$date->fi_adate]=$date->fi_adate;
		}
		$users = User::model()->findAllBySql("select type,count(1) as id,fi_adate from users where status = 1 and type <>'Operating Committee'  group by type,fi_adate order by type,fi_adate");
		foreach($users as $user){
			$result[$user->type][$user->fi_adate] = $user->id;
		}
		
		$guests = User::model()->findAllBySql("select u.type,count(1) as id,g.fi_adate from guests g,users u where u.status = 1 and u.has_guest = 1 and g.user_id = u.id and u.type <>'Operating Committee'  group by u.type,g.fi_adate order by u.type,g.fi_adate");
		$guestArrivalDates = Guest::model()->findAllBySql("select distinct(g.fi_adate) fi_adate from guests g,users u  where u.status = 1 and u.has_guest = 1 and g.user_id = u.id and u.type <>'Operating Committee' order by g.fi_adate");
		foreach($guestArrivalDates as $date){
			if(!isset($dates[$date->fi_adate])){
				$dates[$date->fi_adate]=$date->fi_adate;
			}
		}
		foreach($guests as $guest){
			if(isset($result[$guest->type][$guest->fi_adate])){
				$result[$guest->type][$guest->fi_adate]+= $guest->id;
			}else{
				$result[$guest->type][$guest->fi_adate] = $guest->id;
			}
		}
		$this->render('arrival',array('users'=>$result,'dates'=>$dates)); 
	}
	/**
	 * fi_ddate Departure date from Sydney
	 */
	public function actionDeparture(){

		$dates = array();
		$result = array();
		$arrivalDates = User::model()->findAllBySql("select distinct(fi_ddate) fi_ddate from users where status = 1 and type <>'Operating Committee' order by fi_ddate");
		foreach ($arrivalDates as $date){
			$dates[$date->fi_ddate]=$date->fi_ddate;
		}
		$users = User::model()->findAllBySql("select type,count(1) as id,fi_ddate from users  where status = 1 and type <>'Operating Committee'  group by type,fi_ddate order by type,fi_ddate");
		foreach($users as $user){
			$result[$user->type][$user->fi_ddate] = $user->id;
		}

		$guests = User::model()->findAllBySql("select u.type,count(1) as id,g.fi_ddate from guests g,users u where u.status = 1 and u.has_guest = 1 and g.user_id = u.id and u.type <>'Operating Committee'  group by u.type,g.fi_ddate order by u.type,g.fi_ddate");
		$guestArrivalDates = Guest::model()->findAllBySql("select distinct(g.fi_ddate) fi_ddate from guests g,users u  where u.status = 1 and g.user_id = u.id and u.type <>'Operating Committee' order by g.fi_ddate");
		foreach($guestArrivalDates as $date){
			if(!isset($dates[$date->fi_ddate])){
				$dates[$date->fi_ddate]=$date->fi_ddate;
			}
		}

		foreach($guests as $guest){
			if(isset($result[$guest->type][$guest->fi_ddate])){
				$result[$guest->type][$guest->fi_ddate]+= $guest->id;
			}else{
				$result[$guest->type][$guest->fi_ddate] = $guest->id;
			}
		}
		$this->render('departure',array('users'=>$result,'dates'=>$dates)); 
	}
	
	public function actionTeamdinner(){
		$criteria = new CDbCriteria;
		$criteria->addCondition("t.team_dinner is not null and t.team_dinner <> '' and t.status = 1");
		$criteria->order = 'team_dinner asc';
		$users = User::model()->findAll($criteria);
		$criteria = new CDbCriteria;
		$criteria->addCondition("user.team_dinner is not null and user.team_dinner <> '' and user.status = 1 and user.has_guest = 1 ");
		$criteria->order = 'user.team_dinner asc';
		$guests = Guest::model()->with('user')->findAll($criteria);
		$this->render('teamdinner',array('users'=>$users,'guests'=>$guests));
	}
	public function actionGalatable(){
		$this->render('galatable');
	}
	public function actionPrinters($download=0){
		$users = User::model()->with('guest')->findAllByAttributes(array('status'=>1),array('order'=>'t.type ,t.last_name asc'));
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'Printers_List';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('printers_export',array('users'=>$users));
			
		}else{
			$this->render('printers',array('users'=>$users));
		}
	}
	public function actionNewregistration($download=0){
		$criteria = new CDbCriteria();
		$criteria->addNotInCondition('type', array('Crew','Gartner Crew','Operating Committee'));
		$criteria->order = 'updated_at desc';
		$criteria->addColumnCondition(array('status'=>1));
		$users = User::model()->findAll($criteria);
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'New_Registration_List';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('new_registration_export',array('users'=>$users));
		}else{
			$this->render('new_registration',array('users'=>$users));
		}
	}
	public function actionDeclined($download=0){
		$criteria = new CDbCriteria();
		$criteria->addNotInCondition('type', array('Crew','Gartner Crew','Operating Committee'));
		$criteria->order = 'updated_at desc';
		$criteria->addColumnCondition(array('status'=>2));
		$users = User::model()->findAllByAttributes(array('status'=>2),array('order'=> 'updated_at desc'));
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'Declined_List';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('declined_export',array('users'=>$users));
		}else{
			$this->render('declined',array('users'=>$users));
		}
	}
	public function actionCancelled($download=0){
		$criteria = new CDbCriteria();
		$criteria->addNotInCondition('type', array('Crew','Gartner Crew','Operating Committee'));
		$criteria->order = 'updated_at desc';
		$criteria->addColumnCondition(array('status'=>3));
		$users = User::model()->findAll($criteria);
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'Cancelled_List';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('cancelled_export',array('users'=>$users));
		}else{
			$this->render('cancelled',array('users'=>$users));
		}
	}
	public function actionAmex(){
		$this->layout = '//layouts/export';
		$filename = 'AMEX_Travel_List';
		$users = User::model()->with('guest')->findAll("status = 1 and type <>'Operating Committee'");
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('amex',array('users'=>$users));
	}
	public function actionDmc(){
		$this->render('dmc');
	}
	public function actionUsers($type='',$status=0){
		$type_array = explode(',',$type);
		$criteria = new CDbCriteria();
		$criteria->addInCondition('type', $type_array);
		$criteria->addColumnCondition(array('status'=>$status));
		$criteria->order='t.updated_at desc';
		$users = User::model()->with('guest')->findAll($criteria);
		
		$this->layout = '//layouts/export';
		$filename = 'User_List';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('users',array('users'=>$users,'type'=>$type,'status'=>$status));
	}
	public function actionOnsiteUsers($type='',$status=0){
		$type_array = explode(',',$type);
		$criteria = new CDbCriteria();
		$criteria->addInCondition('type', $type_array);
		$criteria->addColumnCondition(array('status'=>$status,'t.has_checkin'=>1));
		$criteria->order='t.updated_at desc';
		$users = User::model()->with('guest')->findAll($criteria);
	
		$this->layout = '//layouts/export';
		$filename = 'User_List';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('users',array('users'=>$users,'type'=>$type,'status'=>$status));
	}
	public function actionDmcdownload(){
		$this->layout = '//layouts/export';
		$filename = 'DMC_Download_List';
		$users = User::model()->with('guest')->findAllByAttributes(array('status'=>1));
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('dmc_download',array('users'=>$users));
	}
	
	public function actionTraveluser($type='all',$fi_adate='',$fi_ddate='',$travelType=""){
		$type_array = explode(',',$type);
		$criteria = new CDbCriteria();
		if($type != 'all'){
			$criteria->addInCondition('type', $type_array);
		}
		if(!empty($fi_adate)){
			$criteria->addColumnCondition(array('t.fi_adate'=>$fi_adate));
		}
		if(!empty($fi_ddate)){
			$criteria->addColumnCondition(array('t.fi_ddate'=>$fi_ddate));
		}
		$criteria->order='t.updated_at desc';
		$criteria->addColumnCondition(array('t.status'=>1));
		$criteria->addCondition("t.type <>'Operating Committee'");
		$users = User::model()->with('guest')->findAll($criteria);
		
		
		$criteria = new CDbCriteria();
		$criteria->addInCondition('user.type', $type_array);
		$criteria->addColumnCondition(array('user.status'=>1,'user.has_guest'=>1));
		$criteria->addCondition("user.type <>'Operating Committee'");
		$criteria->join='inner join users user on user.id = t.user_id';
		$criteria->order='t.updated_at desc';
		if(!empty($type_array)){
			$criteria->addInCondition('type', $type_array);
		}
		if(!empty($fi_adate)){
			$criteria->addColumnCondition(array('t.fi_adate'=>$fi_adate));
		}
		if(!empty($fi_ddate)){
			$criteria->addColumnCondition(array('t.fi_ddate'=>$fi_ddate));
		}
		$guests = Guest::model()->findAll($criteria);
		$this->layout = '//layouts/export';
		$filename = 'User_List';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('traveluser',array('users'=>$users,'type'=>$type,'guests' => $guests,'travelType'=>$travelType));
	}
	
	public function actionExportTeamDietary($team_dinner='',$dietary='',$team_dinner_menu='',$table_no=''){
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			$criteria->addInCondition('t.team_dinner', explode(',',$team_dinner));
		}
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($team_dinner_menu)){
			$criteria->addInCondition('t.team_dinner_menu', explode(',',$team_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('status'=>'1'));
		$criteria->addCondition("t.team_dinner is not null and t.team_dinner <> ''");
		$criteria->order = "t.id desc";
		$users = User::model()->findAll($criteria);
		
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			$criteria->addInCondition('user.team_dinner', explode(',',$team_dinner));
		}
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($team_dinner_menu)){
			$criteria->addInCondition('t.team_dinner_menu', explode(',',$team_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1));
		$criteria->addCondition("user.team_dinner is not null and user.team_dinner <> ''");
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
		
		$this->layout = '//layouts/export';
		$filename = 'Team_Dietary.xls';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('export_team_dietary',array('users'=>$users,'guests' => $guests));
		
	}
	
	public function actionOnsiteExportTeamDietary($team_dinner='',$dietary='',$team_dinner_menu='',$table_no=''){
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			$criteria->addInCondition('t.team_dinner', explode(',',$team_dinner));
		}
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($team_dinner_menu)){
			$criteria->addInCondition('t.team_dinner_menu', explode(',',$team_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('status'=>'1','t.has_checkin'=>1,'t.no_gala_dinner'=>0));
		$criteria->addCondition("t.team_dinner is not null and t.team_dinner <> ''");
		$criteria->order = "t.id desc";
		$users = User::model()->findAll($criteria);
	
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			$criteria->addInCondition('user.team_dinner', explode(',',$team_dinner));
		}
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($team_dinner_menu)){
			$criteria->addInCondition('t.team_dinner_menu', explode(',',$team_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1,'t.has_checkin'=>1,'t.no_gala_dinner'=>0));
		$criteria->addCondition("user.team_dinner is not null and user.team_dinner <> ''");
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
	
		$this->layout = '//layouts/export';
		$filename = 'Team_Dietary.xls';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('export_team_dietary',array('users'=>$users,'guests' => $guests));
	
	}
	
	public function actionExportGalaDietary($team_dinner='',$dietary='',$gala_dinner_menu='',$table_no=''){
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			if($team_dinner=='VIP'){
				$criteria->addColumnCondition(array('gala_dinner_vip'=>'Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Crew'));
			}elseif($team_dinner=='Gartner Crew'){
				$criteria->addColumnCondition(array('type'=>'Gartner Crew'));
				$criteria->addNotInCondition('gala_dinner_vip', array('Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Crew'));
			}elseif($team_dinner=="Crew"){
				$criteria->addInCondition('type', array('Crew'));
			}else{
				$criteria->addInCondition('t.team_dinner', explode(',',$team_dinner));
				$criteria->addNotInCondition('gala_dinner_vip', array('Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Gartner Crew,Crew'));
			}
		}
		
		$criteria->addCondition("team_dinner is not null");
		
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($gala_dinner_menu)){
			$criteria->addInCondition('t.gala_dinner_menu', explode(',',$gala_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('status'=>'1'));
		$criteria->order = "t.id desc";
		
		$users = User::model()->findAll($criteria);
	
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			if($team_dinner=='VIP'){
				$criteria->addColumnCondition(array('gala_dinner_vip'=>'Gala Dinner VIP'));
			}else{
				$criteria->addInCondition('user.team_dinner', explode(',',$team_dinner));
				$criteria->addNotInCondition('user.gala_dinner_vip', array('Gala Dinner VIP'));
			}
		}
		
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($gala_dinner_menu)){
			$criteria->addInCondition('t.gala_dinner_menu', explode(',',$gala_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1));
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
	
		$this->layout = '//layouts/export';
		$filename = 'Gala_Dietary';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('export_gala_dietary',array('users'=>$users,'guests' => $guests,'team_dinner'=>$team_dinner));
	
	}
	
	public function actionOnsiteExportGalaDietary($team_dinner='',$dietary='',$gala_dinner_menu='',$table_no=''){
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			if($team_dinner=='VIP'){
				$criteria->addColumnCondition(array('gala_dinner_vip'=>'Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Crew'));
			}elseif($team_dinner=='Gartner Crew'){
				$criteria->addColumnCondition(array('type'=>'Gartner Crew'));
				$criteria->addNotInCondition('gala_dinner_vip', array('Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Crew'));
			}elseif($team_dinner=="Crew"){
				$criteria->addInCondition('type', array('Crew'));
			}else{
				$criteria->addInCondition('t.team_dinner', explode(',',$team_dinner));
				$criteria->addNotInCondition('gala_dinner_vip', array('Gala Dinner VIP'));
				$criteria->addNotInCondition('type', array('Gartner Crew,Crew'));
			}
		}
	
		$criteria->addCondition("team_dinner is not null and t.has_checkin = 1 and t.no_gala_dinner = 0");
	
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($gala_dinner_menu)){
			$criteria->addInCondition('t.gala_dinner_menu', explode(',',$gala_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('status'=>'1'));
		$criteria->order = "t.id desc";
	
		$users = User::model()->findAll($criteria);
	
		$criteria = new CDbCriteria();
		if(!empty($team_dinner)){
			if($team_dinner=='VIP'){
				$criteria->addColumnCondition(array('gala_dinner_vip'=>'Gala Dinner VIP'));
			}else{
				$criteria->addInCondition('user.team_dinner', explode(',',$team_dinner));
				$criteria->addNotInCondition('user.gala_dinner_vip', array('Gala Dinner VIP'));
			}
		}
	
		if(!empty($dietary)){
			$criteria->addInCondition('t.team_dinner_dietary', explode(',',$dietary));
		}
		if(!empty($gala_dinner_menu)){
			$criteria->addInCondition('t.gala_dinner_menu', explode(',',$gala_dinner_menu));
		}
		if(!empty($table_no)){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1,'t.has_checkin'=>1,'t.no_gala_dinner'=>0));
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
	
		$this->layout = '//layouts/export';
		$filename = 'Gala_Dietary';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('export_gala_dietary',array('users'=>$users,'guests' => $guests,'team_dinner'=>$team_dinner));
	
	}
	
	public function actionMeal(){
		$meals = array();
		$dbCommand = Yii::app()->db->createCommand("select gala_dinner_menu ,table_no,count(1) as num from users where status = 1 and type <> 'Crew' group by table_no,gala_dinner_menu order by table_no");
		$result = $dbCommand->queryAll();
		if(isset($result)){
			foreach($result as $item){
				$meals[$item['table_no']][$item['gala_dinner_menu']]=$item['num'];
			}
		}
		$dbCommand = Yii::app()->db->createCommand("select g.gala_dinner_menu ,u.table_no,count(1) as num from users u,guests g where u.id = g.user_id and u.has_guest = 1 and u.type<>'Crew' and u.status = 1 group by u.table_no,g.gala_dinner_menu order by u.table_no");
		$result = $dbCommand->queryAll();
		if(isset($result)){
			foreach($result as $item){
				if(isset($meals[$item['table_no']][$item['gala_dinner_menu']])){
					$meals[$item['table_no']][$item['gala_dinner_menu']]+=$item['num'];
				}else{
					$meals[$item['table_no']][$item['gala_dinner_menu']]=$item['num'];
				}
			}
		}
		$this->render('meal',array('meals'=>$meals));
	}
	
	public function actionOnsiteMeal(){
		$meals = array();
		$dbCommand = Yii::app()->db->createCommand("select gala_dinner_menu ,table_no,count(1) as num 
				from users where status = 1 and no_gala_dinner = 0 and has_checkin = 1 and type <> 'Crew' and table_no <> '' and table_no is not null group by table_no,gala_dinner_menu order by table_no");
		$result = $dbCommand->queryAll();
		if(isset($result)){
			foreach($result as $item){
				$meals[$item['table_no']][$item['gala_dinner_menu']]=$item['num'];
			}
		}
		$dbCommand = Yii::app()->db->createCommand("select g.gala_dinner_menu ,u.table_no,count(1) as num 
				from users u,guests g where u.id = g.user_id  and g.no_gala_dinner = 0 and g.has_checkin = 1 and u.has_guest = 1 and u.type<>'Crew' and u.status = 1 and table_no <> '' and table_no is not null group by u.table_no,g.gala_dinner_menu order by u.table_no");
		$result = $dbCommand->queryAll();
		if(isset($result)){
			foreach($result as $item){
				if(isset($meals[$item['table_no']][$item['gala_dinner_menu']])){
					$meals[$item['table_no']][$item['gala_dinner_menu']]+=$item['num'];
				}else{
					$meals[$item['table_no']][$item['gala_dinner_menu']]=$item['num'];
				}
			}
		}
		$this->render('onsite_meal',array('meals'=>$meals));
	}
	public function actionLibbys(){
		$meals = array();
		$dbCommand = Yii::app()->db->createCommand("SELECT sum(user_num) AS user_num, table_no, sum(guest_num) as guest_num FROM ( SELECT count(1) AS user_num, table_no, 0 AS guest_num FROM users WHERE STATUS = 1 AND table_no IS NOT NULL AND table_no <> '' GROUP BY table_no UNION ALL SELECT 0 AS user_num, u.table_no, count(1) AS guest_num FROM guests g, users u WHERE u.has_guest = 1 and g.user_id = u.id AND u. STATUS = 1 GROUP BY table_no ) AS a GROUP BY table_no");
		$meals = $dbCommand->queryAll();
		if($meals === null){
			$meals = array();
		}
		$this->render('libbys',array('meals'=>$meals));
	}
	public function actionOnsiteLibbys(){
		$meals = array();
		$dbCommand = Yii::app()->db->createCommand("SELECT sum(user_num) AS user_num, table_no, team_dinner, sum(guest_num) as guest_num 
				FROM ( SELECT count(1) AS user_num,team_dinner, table_no, 0 AS guest_num FROM users WHERE STATUS = 1  and no_gala_dinner = 0  and has_checkin = 1 AND table_no IS NOT NULL AND table_no <> '' and table_no is not null GROUP BY table_no 
						UNION ALL 
						SELECT 0 AS user_num,u.team_dinner, u.table_no, count(1) AS guest_num FROM guests g, users u WHERE u.has_guest = 1  and g.no_gala_dinner = 0 and g.user_id = u.id and g.has_checkin = 1 AND u. STATUS = 1 AND u.table_no <> '' and u.table_no is not null GROUP BY table_no ) AS a GROUP BY table_no");
		$meals = $dbCommand->queryAll();
		if($meals === null){
			$meals = array();
		}
		$this->render('onsite_libbys',array('meals'=>$meals));
	}
	public function actionExportLibbys($table_no=''){
		$criteria = new CDbCriteria();
		if(!empty($table_no)){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('status'=>'1'));
		$criteria->order = "t.id desc";
		$users = User::model()->with('guest')->findAll($criteria);
		
		$criteria = new CDbCriteria();
		if(!empty($table_no)){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1));
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
		$this->layout = '//layouts/export';
		$filename = 'Libby_List';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('libbys_export',array('users'=>$users,'guests' => $guests));
		
	}
	
	public function actionOnsiteExportLibbys($table_no='all'){
		$criteria = new CDbCriteria();
		if($table_no!='all'){
			$criteria->addInCondition('t.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('t.status'=>'1','t.has_checkin'=>1,'t.no_gala_dinner'=>0));
		$criteria->addCondition("type <> 'Crew'");
		$criteria->order = "t.id desc";
		$users = User::model()->with('guest')->findAll($criteria);
	
		$criteria = new CDbCriteria();
		if($table_no!='all'){
			$criteria->addInCondition('user.table_no', explode(',',$table_no));
		}
		$criteria->addColumnCondition(array('user.status'=>'1','user.has_guest'=>1,'t.has_checkin'=>1,'t.no_gala_dinner'=>0));
		$criteria->order = "t.id desc";
		$guests = Guest::model()->with('user')->findAll($criteria);
		$this->layout = '//layouts/export';
		$filename = 'Libby_List';
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('onsite_libbys_export',array('users'=>$users,'guests' => $guests));
	
	}
	
	
	public function actionHousinguser($type='all',$date='',$hotel_type='all'){
		$type_array = explode(',',$type);
		$hotel_type_array = explode(',',$hotel_type);
		$criteria = new CDbCriteria();
		//date?
		if(!empty($date)){
			$criteria->addCondition("str_to_date(t.hotel_departure_date,'%b/%e/%Y') > str_to_date(:hotel_departure_date,'%Y-%m-%e') and str_to_date(t.hotel_arrival_date,'%b/%e/%Y') <= str_to_date(:hotel_arrival_date,'%Y-%m-%e')");
			$criteria->params=array(':hotel_arrival_date'=>$date,':hotel_departure_date'=>$date);
		}
		
		
		if($type != 'all'){
			$criteria->addInCondition('type', $type_array);
		}
		if($hotel_type != 'all'){
			$criteria->addInCondition('hotel_type', $hotel_type_array);
		}
		$criteria->order='t.updated_at desc';
		$criteria->addColumnCondition(array('t.status'=>1));
		$users = User::model()->with('guest')->findAll($criteria);
//  	echo count($users);Yii::app()->end();
		$this->layout = '//layouts/export';
		$filename = 'User_List';
		header('Content-type:application/xls;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('housinguser',array('users'=>$users));
	}
	//'onsiteAttended','onsiteGaladinner','onsiteTeamdinner','onsiteGalatable','gift','ipad'
	public function actionOnsiteAttended($status=1){
		$type_array = explode(',',User::model()->types);
		foreach($type_array as $type){
			$users[$type]['r'] = User::model()->countByAttributes(array('status'=>$status,'type'=>$type));
			$users[$type]['a'] = User::model()->countByAttributes(array('status'=>$status,'type'=>$type,'has_checkin'=>1));
			$guests[$type]['r'] = Guest::model()->countBySql('select count(*) from guests g,users u where g.user_id = u.id and u.status = :status and u.type = :type and u.has_guest = 1',
					array(':status'=>$status,':type'=>$type));
			$guests[$type]['a'] = Guest::model()->countBySql('select count(*) from guests g,users u where g.user_id = u.id and u.status = :status and u.type = :type and u.has_guest = 1 and g.has_checkin = 1',
					array(':status'=>$status,':type'=>$type));
		}
		$users['Total']['r'] = User::model()->count("status=:status and type<>'Crew' and type <> 'Gartner Crew' ",array(':status'=>$status,));
		$users['Total']['a'] = User::model()->count("status=:status and type<>'Crew' and type <> 'Gartner Crew' and has_checkin = 1 ",array(':status'=>$status));
		$guests['Total']['r'] =Guest::model()->countBySql("select count(*) from guests g,users u where g.user_id = u.id and u.status = :status and u.has_guest = 1 and type<>'Crew' and type <> 'Gartner Crew' ",
					array(':status'=>$status));
		$guests['Total']['a'] = Guest::model()->countBySql("select count(*) from guests g,users u where g.user_id = u.id and u.status = :status and u.has_guest = 1 and g.has_checkin = 1  and type<>'Crew' and type <> 'Gartner Crew'",
					array(':status'=>$status));
		$this->render('onsite_attended',array(
				'users'=>$users,
				'guests'=>$guests,
				'status'=>$status,
		));
	}
	public function actionOnsiteGaladinner(){
		$cirteria = new CDbCriteria;
		$cirteria->addCondition("team_dinner is not null and t.type <>'Crew' and  t.status = 1 and t.has_checkin = 1 and t.no_gala_dinner = 0");
		$cirteria->order = 'team_dinner asc';
		$users = User::model()->findAll($cirteria);
		$cirteria = new CDbCriteria;
		$cirteria->addCondition('t.gala_dinner_menu is not null and user.team_dinner is not null and user.status = 1 and user.has_guest = 1 and t.has_checkin = 1 and t.no_gala_dinner = 0');
		$cirteria->order = 'user.team_dinner asc';
		$guests = Guest::model()->with('user')->findAll($cirteria);
		$this->render('onsite_galadinner',array('users'=>$users,'guests'=>$guests));
	}
	public function actionOnsiteTeamdinner(){
		$criteria = new CDbCriteria;
		$criteria->addCondition("t.team_dinner is not null and t.team_dinner <> '' and t.status = 1 and t.has_checkin = 1");
		$criteria->order = 'team_dinner asc';
		$users = User::model()->findAll($criteria);
		$criteria = new CDbCriteria;
		$criteria->addCondition("user.team_dinner is not null and user.team_dinner <> '' and user.status = 1 and t.has_checkin = 1 and user.has_guest = 1 ");
		$criteria->order = 'user.team_dinner asc';
		$guests = Guest::model()->with('user')->findAll($criteria);
		$this->render('onsite_teamdinner',array('users'=>$users,'guests'=>$guests));
	}
	public function actionOnsiteGalatable(){
		$this->render('onsite_galatable');
	}
	public function actionGift($download=0){
		$users = User::model()->with('gift')->findAllByAttributes(array('has_gift'=>1));
		$guests = Guest::model()->with('user','gift')->findAllByAttributes(array('has_gift'=>1));
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'Gift_Report';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('gift_export',array('users'=>$users,'guests'=>$guests));
		
		}else{
			$this->render('gift',array('users'=>$users,'guests'=>$guests));
		}
	}
	public function actionIpad($download=0){
		$users = User::model()->findAllByAttributes(array('has_ipad'=>1));
		if($download==1){
			$this->layout = '//layouts/export';
			$filename = 'Collection_Report';
			header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
			header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
			header("Content-Transfer-Encoding: binary");
			header("Pragma: public");
			header("Cache-Control: public");
			$this->render('ipad_export',array('users'=>$users));
		
		}else{
			$this->render('ipad',array('users'=>$users));
		}
	}
	
	public function actionAttendedDownload($type="all"){
		$this->layout = '//layouts/export';
		$filename = 'All Users';
		
		$criteria = new CDbCriteria();
		$type_array = explode(',',$type);
		if($type != 'all'){
			$criteria->addInCondition('type', $type_array);
		}
		$criteria->addCondition('t.status = 1 and (t.has_checkin = 1 or guest.has_checkin = 1)');
		$users = User::model()->with('guest')->findAll($criteria);
		
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('onsite_download',array('users'=>$users));
	}
	public function actionNoShowDownload($type="all"){
		$this->layout = '//layouts/export';
		$filename = 'All Users';
		$criteria = new CDbCriteria();
		$criteria->addCondition('t.status = 1 and (t.has_checkin = 0 or guest.has_checkin = 0)');
		$type_array = explode(',',$type);
		if($type != 'all'){
			$criteria->addInCondition('type', $type_array);
		}
		$users = User::model()->with('guest')->findAll($criteria);
		header('Content-type:application/csv;charset=utf8'); //表示输出Excel文件
		header('Content-Disposition:attachment; filename=' . $filename . '.xls');//文件名
		header("Content-Transfer-Encoding: binary");
		header("Pragma: public");
		header("Cache-Control: public");
		$this->render('onsite_noshow_download',array('users'=>$users));
	}
	
	public function actionNomination(){
		$qualities = Nomination::model()->findAllBySql("select DISTINCT(quality) as quality,count(*) id from nominations where status = 1 and quality <>'' group by quality order by id desc limit 7");
		$values = Nomination::model()->findAllBySql("select DISTINCT(value) as value,count(*) id from nominations where status = 1 and value <>''  group by value order by id desc limit 7");
		$innovations = Nomination::model()->findAllBySql("select DISTINCT(innovation) as innovation,count(*) id from nominations where status = 1 and innovation <>''  group by innovation order by id desc limit 7");
		$trusts = Nomination::model()->findAllBySql("select DISTINCT(trust) as trust,count(*) id from nominations where status = 1 and trust <>''  group by trust order by id desc limit 7");
		$services = Nomination::model()->findAllBySql("select DISTINCT(service) as service,count(*) id from nominations where status = 1 and service <>''  group by service order by id desc limit 7");
		$teams = Nomination::model()->findAllBySql("select DISTINCT(team) as team,count(*) id from nominations where status = 1 and team <>''  group by team order by id desc limit 7");
		$itlt_awards = Nomination::model()->findAllBySql("select DISTINCT(itlt_award) as itlt_award,count(*) id from nominations where status = 1 and itlt_award <>''  group by itlt_award order by id desc limit 7");
		$this->render('nomination',array('qualities'=>$qualities,
				'values'=>$values,
				'innovations'=>$innovations,
				'trusts'=>$trusts,
				'services'=>$services,
				'teams'=>$teams,
				'itlt_awards'=>$itlt_awards,
		));
	}
	

}

