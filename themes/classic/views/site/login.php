<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p class="alert span10">Please fill out the following form with your login credentials:</p>

<div class="row">
<div class="span10">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array('class'=>'form-horizontal'),
)); ?>
		<div class="control-group  <?php if($model->getError('username')){ echo 'error';}?>">
			<label class="control-label" for="inputEmail">Email:</label>
			<div class="controls">
				<?php echo $form->textField($model,'username',array("id"=>"inputEmail" ,'placeholder'=>"Email")); ?>
				<?php if($model->getError('username')){?><span class="help-inline"><?php echo $model->getError('username')?></span><?php }?>
			</div>
		</div>
		<div class="control-group">
			<div class="controls" style="">
				<button type="submit"  class="btn btn-large btn-warning">Login</button>
			</div>
		</div>
</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
