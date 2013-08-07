<?php
/* @var $this GuestController */
/* @var $model Guest */

$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Guest', 'url'=>array('index')),
	array('label'=>'Create Guest', 'url'=>array('create')),
	array('label'=>'Update Guest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Guest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guest', 'url'=>array('admin')),
);
?>

<h1>View Guest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'first_name',
		'last_name',
		'relationship',
		'telephone_number',
		'email',
		'date_of_birth',
		'dietary_requirements',
		'passport',
		'special_requests',
		'nationality',
		'departure_date',
		'return_date',
		'airport_name',
		'airport_code',
		'hotel_arrival_date',
		'hotel_departure_date',
		'room_type',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
