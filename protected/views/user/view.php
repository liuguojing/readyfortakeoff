<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'name',
		'display_name',
		'job_title',
		'department',
		'employee_number',
		'telephone',
		'mobile_telephone',
		'personal_or_business_number',
		'emergency_contact_name',
		'emergency_contact_telephone_number',
		'email',
		'twitter_account',
		'special_requirements',
		'specific_medical_conditions',
		'office',
		'outbound_time',
		'return_time',
		'do_question',
		'donot_question',
		'develop_question',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
