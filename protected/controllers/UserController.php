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
				'expression' => '$user->isAdmin',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('information','survey','review','vote','nominate','vote','confirmation'),
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
			$model->setScenario('information');
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
				$this->redirect(array('nominate'));
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
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('confirmation'));
		}
		$criteria = new CDbCriteria;
		$criteria->with = 'user';
		$criteria->order = 'type asc';
		$criteria->condition = 't.created_by = :created_by';
		$criteria->params = array(':created_by'=>Yii::app()->user->id);
		$nominates = Nominate::model()->findAll($criteria);
		$this->render('review',array(
				'model'=>$model,
				'nominates'=>$nominates,
		));
	}
	
	public function actionNominate(){
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
					$model->addError('type', 'All The Nominate Must Fllow The Autocomple.');
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
		$this->render('confirmation',
				array('model'=>$model)
		);
	}
}
