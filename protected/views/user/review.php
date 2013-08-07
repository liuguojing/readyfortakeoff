<div class="row">
	<div class="span12">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form'),
)); ?>
		<h1>Review</h1>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<button type="submit"  class="btn btn-success">Save & Proceed</button>
				<?php echo $form->hiddenField($model,'status');?>
				<?php if($model->getError('status')){?><p class="alert alert-error"><?php echo $model->getError('status')?></p><?php }?>
			</caption>
				<?php 
				$attributes = explode(',','display_name,job_title,department,employee_number,telephone,mobile_telephone,personal_or_business_number,emergency_contact_name,emergency_contact_telephone_number,email,twitter_account,special_requirements,specific_medical_conditions,office,outbound_time,return_time,do_question,donot_question,develop_question');
				foreach ($attributes as $attribute){?>
			<tr>
				<td style="width:40%"><?php echo $model->getAttributeLabel($attribute);?></td>
				<td><?php echo CHtml::encode($model->$attribute);?></td>
			</tr>
				<?php }?>
			<?php foreach($nominates as $nominate){?>
			<tr>
				<td><?php echo $nominate->getTypeText();?></td>
				<td><?php echo $nominate->user->name;?></td>
			</tr>
			<?php }?>
		</table>
<?php $this->endWidget(); ?>
	</div>
</div>