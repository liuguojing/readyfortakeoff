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
				<button type="submit"  class="btn btn-large btn-danger" style="margin-bottom:10px;">Submit</button>
				<?php echo $form->hiddenField($model,'status');?>
				<?php if($model->getError('status')){?><p class="alert alert-error"><?php echo $model->getError('status')?></p><?php }?>
				<p class="label" style="margin:0;font-size: 16px;line-height: 20px;"><?php echo CHtml::link('Edit Information',array('user/information'),array('style'=>'color:#fff'))?></p>
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
				<p class="label" style="margin:0;font-size: 16px;line-height: 20px;"><?php echo CHtml::link('Edit Survey',array('user/survey'),array('style'=>'color:#fff'))?></p>
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
		<?php if(!isset($model->nomination)){
			$model->nomination = new Nomination;
		}
		?>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<p class="label" style="margin:0;font-size: 16px;line-height: 20px;"><?php echo CHtml::link('Edit Nomination',array('user/nomination'),array('style'=>'color:#fff'))?></p>
			</caption>
			<tr>
				<td style="width:40%">Quality</td>
				<td><?php echo $model->nomination->quality;?></td>
			</tr>
			<tr>
				<td style="width:40%">Value</td>
				<td><?php echo $model->nomination->value;?></td>
			</tr>
			<tr>
				<td style="width:40%">Innovation</td>
				<td><?php echo $model->nomination->innovation;?></td>
			</tr>
			<tr>
				<td style="width:40%">Trust</td>
				<td><?php echo $model->nomination->trust;?></td>
			</tr>
			<tr>
				<td style="width:40%">Service</td>
				<td><?php echo $model->nomination->service;?></td>
			</tr>
			<tr>
				<td style="width:40%">Team</td>
				<td><?php echo $model->nomination->team;?></td>
			</tr>
		</table>
<?php $this->endWidget(); ?>
	</div>
</div>
<div class="row">
	<div class="span12" style="margin-top:40px;font-size:10px;color:#555;">
		<p>None of this information is going to be shared outside M&S</p>
	</div>
</div>