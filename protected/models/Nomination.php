<?php

/**
 * This is the model class for table "nominations".
 *
 * The followings are the available columns in table 'nominations':
 * @property string $id
 * @property string $user_id
 * @property string $quality
 * @property string $value
 * @property string $innovation
 * @property string $trust
 * @property string $service
 * @property string $team
 * @property string $itlt_award
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Nomination extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nomination the static model class
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
		return 'nominations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>10),
			array('quality, value, innovation, trust, service, team, itlt_award', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, quality, value, innovation, trust, service, team, itlt_award, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'quality' => 'Quality',
			'value' => 'Value',
			'innovation' => 'Innovation',
			'trust' => 'Trust',
			'service' => 'Service',
			'team' => 'Team',
			'itlt_award' => 'Itlt Award',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('quality',$this->quality,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('innovation',$this->innovation,true);
		$criteria->compare('trust',$this->trust,true);
		$criteria->compare('service',$this->service,true);
		$criteria->compare('team',$this->team,true);
		$criteria->compare('itlt_award',$this->itlt_award,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}