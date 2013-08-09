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
				<button type="submit"  class="btn btn-large btn-success">Finalize</button>
				<?php echo $form->hiddenField($model,'status');?>
				<?php if($model->getError('status')){?><p class="alert alert-error"><?php echo $model->getError('status')?></p><?php }?>
				<h3><?php echo CHtml::link('Edit Information',array('user/information'))?></h3>
			</caption>
			<?php 
				$attributes = explode(',','display_name,job_title,department,employee_number,telephone,mobile_telephone,personal_or_business_number,emergency_contact_name,emergency_contact_telephone_number,email,twitter_account,special_requirements,specific_medical_conditions,office,outbound_time,return_time');
				foreach ($attributes as $attribute){?>
			<tr>
				<td style="width:40%"><?php echo $model->getAttributeLabel($attribute);?></td>
				<td><?php echo CHtml::encode($model->$attribute);?></td>
			</tr>
			<?php }?>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3><?php echo CHtml::link('Edit Survey',array('user/survey'))?></h3>
			</caption>
			<?php 
				$attributes = explode(',','do_question,donot_question,develop_question');
				foreach ($attributes as $attribute){?>
			<tr>
				<td style="width:40%"><?php echo $model->getAttributeLabel($attribute);?></td>
				<td><?php echo CHtml::encode($model->$attribute);?></td>
			</tr>
			<?php }?>
		</table>
		
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3><?php echo CHtml::link('Edit Nomination',array('user/nominate'))?></h3>
			</caption>
			<?php foreach($nominates as $nominate){?>
			<tr>
				<td style="width:40%"><?php echo $nominate->getTypeText();?></td>
				<td><?php echo $nominate->user->name;?></td>
			</tr>
			<?php }?>
		</table>
<?php $this->endWidget(); ?>
	</div>
</div>
<div class="row">
	<div class="span12" style="margin-top:40px;font-size:10px;color:#555;">
		<p><i>None of this information is going to be shared outside M&S</i></p>
	</div>
</div>