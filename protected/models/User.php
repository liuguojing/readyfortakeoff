<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property integer $status
 * @property string $name
 * @property string $display_name
 * @property string $job_title
 * @property string $department
 * @property string $employee_number
 * @property string $telephone
 * @property string $mobile_telephone
 * @property string $personal_or_business_number
 * @property string $emergency_contact_name
 * @property string $emergency_contact_telephone_number
 * @property string $email
 * @property string $twitter_account
 * @property string $special_requirements
 * @property string $specific_medical_conditions
 * @property string $office
 * @property string $outbound_time
 * @property string $return_time
 * @property string $do_question
 * @property string $donot_question
 * @property string $develop_question
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class User extends TrackStarActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('name, display_name, job_title, department, employee_number, telephone, mobile_telephone, personal_or_business_number, emergency_contact_name, emergency_contact_telephone_number, email, twitter_account, office, outbound_time, return_time', 'length', 'max'=>255),
			array('special_requirements, specific_medical_conditions, do_question, donot_question, develop_question, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, status, name, display_name, job_title, department, employee_number, telephone, mobile_telephone, personal_or_business_number, emergency_contact_name, emergency_contact_telephone_number, email, twitter_account, special_requirements, specific_medical_conditions, office, outbound_time, return_time, do_question, donot_question, develop_question, created_at, created_by, updated_at, updated_by', 'safe', 'on'=>'search'),
			array('display_name, job_title, department, employee_number, telephone, mobile_telephone, personal_or_business_number, emergency_contact_name, emergency_contact_telephone_number, email, office, outbound_time, return_time' ,'required','on'=>'information'),
			array('display_name, job_title, department, employee_number, telephone, mobile_telephone, personal_or_business_number, emergency_contact_name, emergency_contact_telephone_number, email, office' ,'required','on'=>'information_notime'),
			array('do_question, donot_question, develop_question','required','on'=>'survey'),
			array('id, status, name, display_name, job_title, department, employee_number, telephone, mobile_telephone, personal_or_business_number, emergency_contact_name, emergency_contact_telephone_number, email, twitter_account, special_requirements, specific_medical_conditions, office, outbound_time, return_time, do_question, donot_question, develop_question', 'required', 'on'=>'search'),
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
			'nomination'=>array(self::HAS_ONE,'Nomination','user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'status' => 'Status',
			'name' => 'Real Name',
			'display_name' => 'Name',
			'job_title' => 'Job Title',
			'department' => 'Department',
			'employee_number' => 'Employee Number',
			'telephone' => 'Telephone',
			'mobile_telephone' => 'Mobile Telephone',
			'personal_or_business_number' => 'Personal Or Business Number',
			'emergency_contact_name' => 'Emergency Contact Name',
			'emergency_contact_telephone_number' => 'Emergency Contact Telephone Number',
			'email' => 'Your@marksandspencer.com email address',
			'twitter_account' => 'Your Twitter account name (there will be an IT Away Day twitter account live on the day for you to follow)',
			'special_requirements' => 'Special Requirements (including dietary)',
			'specific_medical_conditions' => 'Are there any specific medical conditions we should be aware of? Please specify if so.',
			'office' => ' Office',
			'outbound_time' => 'If you are travelling from/to Stockley Park, coaches are available.  If you would like to take advantage of this service please select your chosen time below',
			'return_time' => 'Return Time',
			'do_question' => 'Do',
			'donot_question' => "Don't",
			'develop_question' => 'Develop',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('display_name',$this->display_name,true);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('employee_number',$this->employee_number,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('mobile_telephone',$this->mobile_telephone,true);
		$criteria->compare('personal_or_business_number',$this->personal_or_business_number,true);
		$criteria->compare('emergency_contact_name',$this->emergency_contact_name,true);
		$criteria->compare('emergency_contact_telephone_number',$this->emergency_contact_telephone_number,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('twitter_account',$this->twitter_account,true);
		$criteria->compare('special_requirements',$this->special_requirements,true);
		$criteria->compare('specific_medical_conditions',$this->specific_medical_conditions,true);
		$criteria->compare('office',$this->office,true);
		$criteria->compare('outbound_time',$this->outbound_time,true);
		$criteria->compare('return_time',$this->return_time,true);
		$criteria->compare('do_question',$this->do_question,true);
		$criteria->compare('donot_question',$this->donot_question,true);
		$criteria->compare('develop_question',$this->develop_question,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function departmentOptions(){
		return array(
				'Strategy and Architecture'=>'Strategy and Architecture',
				'Information Management'=>'Information Management',
				'Multi Channel'=>'Multi Channel',
				'IT Operations'=>'IT Operations',
				'FIRC'=>'FIRC',
				'Trading & Supply Chain'=>'Trading & Supply Chain',
				'Software Engineering'=>'Software Engineering',
				'Central Services'=>'Central Services',
				'Core Development'=>'Core Development',
				"I don't know"=>"I don't know",
		);
	}
	public function officeOptions(){
		return array(
				'Merchant Square, Waterside, Stockley Park'=>'Merchant Square, Waterside, Stockley Park',
				'Eastbourne Terrace 10, London, ENGLAND W2 6LG'=>'Eastbourne Terrace 10, London, ENGLAND W2 6LG',
		);
	}
	public function outboundTimeOptions(){
		return array(
				'07:00'=>'07:00',
				'No outbound'=>'No outbound',
		);
	}
	
	public function returnTimeOptions(){
		return array(
				'17:30'=>'17:30',
				'18:30'=>'18:30',
				'19:30'=>'19:30',
				'No return'=>'No return',
		);
	}
	public function statusOptions(){
		return array('0'=>'no feedback','1'=>'accepted','2'=>'declined');
	}
	
	
}