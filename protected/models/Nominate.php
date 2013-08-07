<?php

/**
 * This is the model class for table "nominates".
 *
 * The followings are the available columns in table 'nominates':
 * @property string $id
 * @property string $type
 * @property string $user_id
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Nominate extends TrackStarActiveRecord
{
	public $quality;
	public $value;
	public $innovation;
	public $trust; 
	public $service; 
	public $team; 
	public $itlt_award;
	
	public function setUser($nominate){
		switch($nominate->type){
			case 1:
				$this->quality = $nominate->user->name;break;
			case 2:
				$this->value = $nominate->user->name;break;
			case 3:
				$this->innovation = $nominate->user->name;break;
			case 4:
				$this->trust = $nominate->user->name;break;
			case 5:
				$this->service = $nominate->user->name;break;
			case 6:
				$this->team = $nominate->user->name;break;
			case 7:
				$this->itlt_award = $nominate->user->name;break;
		}
	}
	public function getTypeText(){
		switch($this->type){
			case 1:
				echo 'Quality';break;
			case 2:
				echo 'Value';break;
			case 3:
				echo 'Innovation';break;
			case 4:
				echo 'Trust';break;
			case 5:
				echo 'Service';break;
			case 6:
				echo 'Team';break;
			case 7:
				echo 'ITLT Award';break;
		}
	}
	public function getUsers(){
		$user1 = User::model()->findByAttributes(array('name'=>$this->quality));
		if($user1 === null){
			return false;
		}
		$user2 = User::model()->findByAttributes(array('name'=>$this->value));
		if($user2 === null){
			return false;
		}
		$user3 = User::model()->findByAttributes(array('name'=>$this->innovation));
		if($user3 === null){
			return false;
		}
		$user4 = User::model()->findByAttributes(array('name'=>$this->trust));
		if($user4 === null){
			return false;
		}
		$user5 = User::model()->findByAttributes(array('name'=>$this->service));
		if($user5 === null){
			return false;
		}
		$user6 = User::model()->findByAttributes(array('name'=>$this->team));
		if($user6 === null){
			return false;
		}
		$user7 = User::model()->findByAttributes(array('name'=>$this->itlt_award));
		if($user7 === null){
			return false;
		}
		return array(
				'1'=>$user1->id,
				'2'=>$user2->id,
				'3'=>$user3->id,
				'4'=>$user4->id,
				'5'=>$user5->id,
				'6'=>$user6->id,
				'7'=>$user7->id,
		);
		
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nominate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nominates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('user_id', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>255),
			array('user_id', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, user_id, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
			array('quality, value, innovation , trust, service, team ,itlt_award','required','on'=>'nominate'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'user'=>array(self::BELONGS_TO,'User','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'user_id' => 'User',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}