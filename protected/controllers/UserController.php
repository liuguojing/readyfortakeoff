<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete'),
				'users'=>array('@'),
				'expression' => '$user->isAdmin && ($user->name=="Sarah-Jane" || $user->name=="Clare"|| $user->name=="admin")'
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('information','survey','review','vote','nomination','vote','confirmation'),
				'users'=>array('@'),
				'expression' => '$user->isUser',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->layout = 'reportColumn';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = 'reportColumn';
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->layout = 'reportColumn';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->layout = 'reportColumn';
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = 'reportColumn';
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionInformation(){
		$model = $this->loadModel(Yii::app()->user->id);
		if(isset($_POST['User']))
		{
			
			if($_POST['User']['office']=='Stockley Park'){
				$model->setScenario('information');
			}else{
				$model->setScenario('information_notime');
			}
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('survey'));
		}
		
		$this->render('information',array(
				'model'=>$model,
		));
	}
	public function actionSurvey(){
		$model = $this->loadModel(Yii::app()->user->id);
		if(isset($_POST['User']))
		{
			$model->setScenario('survey');
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('nomination'));
		}
	
		$this->render('survey',array(
				'model'=>$model,
		));
	}
	public function actionReview(){
		$model = $this->loadModel(Yii::app()->user->id);
		if(isset($_POST['User']))
		{
			$model->setScenario('review');
			$model->status = 1;
			if($model->save())
				$this->redirect(array('confirmation'));
		}
		$this->render('review',array(
				'model'=>$model,
		));
	}
	
	public function actionNomination(){
		$model = Nomination::model()->findByAttributes(array('user_id'=>Yii::app()->user->id));
		if($model === null){
			$model = new Nomination();
			$model->user_id = Yii::app()->user->id;
		}
		if(isset($_POST['Nomination']))
		{
			$model->attributes=$_POST['Nomination'];
			if(!empty($model->quality)){
				$quality_user = User::model()->findByAttributes(array('name'=>$model->quality));
				if($quality_user === null){
					$model->addError('quality', 'All the Nominate must in the nomination list.');
				}
			}
			if(!empty($model->value)){
				$value_user = User::model()->findByAttributes(array('name'=>$model->value));
				if($value_user === null){
					$model->addError('value', 'All the Nominate must in the nomination list.');
				}
			}
			if(!empty($model->innovation)){
				$innovation_user = User::model()->findByAttributes(array('name'=>$model->innovation));
				if($innovation_user === null){
					$model->addError('innovation', 'All the Nominate must in the nomination list.');
				}
			}
			if(!empty($model->trust)){
				$trust_user = User::model()->findByAttributes(array('name'=>$model->trust));
				if($trust_user === null){
					$model->addError('trust', 'All the Nominate must in the nomination list.');
				}
			}
			if(!empty($model->service)){
				$service_user = User::model()->findByAttributes(array('name'=>$model->service));
				if($service_user === null){
					$model->addError('service', 'All the Nominate must in the nomination list.');
				}
			}
// 			if(!empty($model->team)){
// 				$team_user = User::model()->findByAttributes(array('name'=>$model->team));
// 				if($team_user === null){
// 					$model->addError('team', 'All the Nominate must in the nomination list.');
// 				}
// 			}
			if(!empty($model->itlt_award)){
				$itlt_award_user = User::model()->findByAttributes(array('name'=>$model->itlt_award));
				if($itlt_award_user === null){
					$model->addError('itlt_award', 'All the Nominate must in the nomination list.');
				}
			}
			if( count($model->getErrors())==0 && $model->save())
				$this->redirect(array('review'));
		}
		$user_names = '';
		$criteria = new CDbCriteria;
		$criteria->select = 'name';
		$criteria->condition = 'id <> :id';
		$criteria->params = array(':id'=>Yii::app()->user->id);
		$users = User::model()->findAll($criteria);
		foreach($users as $user){
			$user_names .= '"' . $user->name . '",';
		}
		$this->render('nomination',array(
				'model'=>$model,
				'user_names'=>$user_names
		));
	}
	
	public function actionNominate(){
		$this->redirect(array('nomination'));
		Yii::app()->end();
		$model = new Nominate;
		$nominates = Nominate::model()->with('user')->findAllByAttributes(array('created_by'=>Yii::app()->user->id));
		$nominate_array = array();
		foreach($nominates as $nominate){
			$model->setUser($nominate);
			$nominate_array[$nominate->type] = $nominate;
		}
		if(isset($_POST['Nominate']))
		{
			$model->setScenario('nominate');
			$model->attributes=$_POST['Nominate'];
			if($model->validate()){
				if($user_ids = $model->getUsers()){
					$nom1 = isset($nominate_array[1])?$nominate_array[1]:new Nominate;
					$nom1->user_id = $user_ids[1];
					$nom1->type = 1;
					$nom2 = isset($nominate_array[2])?$nominate_array[2]:new Nominate;
					$nom2->user_id = $user_ids[2];
					$nom2->type = 2;
					$nom3 = isset($nominate_array[3])?$nominate_array[3]:new Nominate;
					$nom3->user_id = $user_ids[3];
					$nom3->type = 3;
					$nom4 = isset($nominate_array[4])?$nominate_array[4]:new Nominate;
					$nom4->user_id = $user_ids[4];
					$nom4->type = 4;
					$nom5 = isset($nominate_array[5])?$nominate_array[5]:new Nominate;
					$nom5->user_id = $user_ids[5];
					$nom5->type = 5;
					$nom6 = isset($nominate_array[6])?$nominate_array[6]:new Nominate;
					$nom6->user_id = $user_ids[6];
					$nom6->type = 6;
					$nom7 = isset($nominate_array[7])?$nominate_array[7]:new Nominate;
					$nom7->user_id = $user_ids[7];
					$nom7->type = 7;
					if($nom1->save() && $nom2->save() && $nom3->save() && $nom4->save() && $nom5->save() && $nom6->save() && $nom7->save())
						$this->redirect(array('review'));
				}else {
					$model->addError('type', 'All the Nominate must in the nomination list.');
				}
			}
		}
		$user_names = '';
		$criteria = new CDbCriteria;
		$criteria->select = 'name';
		$criteria->condition = 'id <> :id';
		$criteria->params = array(':id'=>Yii::app()->user->id);
		$users = User::model()->findAll($criteria);
		foreach($users as $user){
			$user_names .= '"' . $user->name . '",';
		}
		$this->render('nominate',array('user_names'=>$user_names,'model'=>$model));
	}
	public function actionConfirmation(){
		//send mail
		$model = $this->loadModel(Yii::app()->user->id);
		$this->sendMail($model->email, 'IT Away Day Registration Confirmation', $model,'confirmation_email');
		Yii::app()->user->logout();
		$this->render('confirmation',
				array('model'=>$model)
		);
	}
}
