<div class="row">
	<div class="span12">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>
		<h1>IT Group Away Day Awards</h1>
		<ul>
			<li>This year at the IT Away Day we will be launching the ‘IT Awards’</li>
			<li>The IT Awards are related directly to our M&S values and are a way of highlighting the great work our employees do within the Group and winder Business</li>
			<li>Employees will get the opportunity to vote for people they believe deserve to be recognised in five categories – Quality, Value, Innovation, Trust and Service</li>
			<li>We will also have a team award to highlight the great work our teams do and special ITLT Award for outstanding achievement</li>
			<li>A short list will be created and employees will vote for the winners</li>
			<li>The winners will then be recognised during the IT Away Day with a certificate and award</li>
		</ul>
		
		<h2>Categories</h2>
		<div class="control-group <?php if($model->getError('quality')){ echo 'error';}?>">
			<label class="control-label" for="User_quality"><b>Quality</b> – this award is for someone who has achieved outstanding results and sets continuously high standards, refuses to settle for current achievements and constantly strives to do more.</label>
			<div class="controls">
				<?php echo $form->textField($model,'quality',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('quality')){?><span class="help-inline"><?php echo $model->getError('quality')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('value')){ echo 'error';}?>">
			<label class="control-label" for="User_value"><b>Value</b> – this award is for someone who has gone beyond all expectations to provide more, while adding little or nothing to cost.</label>
			<div class="controls">
				<?php echo $form->textField($model,'value',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('value')){?><span class="help-inline"><?php echo $model->getError('value')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('innovation')){ echo 'error';}?>">
			<label class="control-label" for="User_innovation"><b>Innovation</b> – this award is for someone who removes assumptions and restrictions to introduce new ideas and solutions through a more open way of thinking and problem solving.</label>
			<div class="controls">
				<?php echo $form->textField($model,'innovation',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('innovation')){?><span class="help-inline"><?php echo $model->getError('innovation')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('trust')){ echo 'error';}?>">
			<label class="control-label" for="User_trust"><b>Trust</b> – this award is for someone who has achieved outstanding results and sets continuously high standards, refuses to settle for current achievements and constantly strives to do more.</label>
			<div class="controls">
				<?php echo $form->textField($model,'trust',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('trust')){?><span class="help-inline"><?php echo $model->getError('trust')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('service')){ echo 'error';}?>">
			<label class="control-label" for="User_service"><b>Service</b> – this award is for someone who has achieved outstanding results and sets continuously high standards, refuses to settle for current achievements and constantly strives to do more.</label>
			<div class="controls">
				<?php echo $form->textField($model,'service',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('service')){?><span class="help-inline"><?php echo $model->getError('service')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('team')){ echo 'error';}?>">
			<label class="control-label" for="User_team"><b>Team</b> – this award is for someone who has achieved outstanding results and sets continuously high standards, refuses to settle for current achievements and constantly strives to do more.</label>
			<div class="controls">
				<?php echo $form->textField($model,'team',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('team')){?><span class="help-inline"><?php echo $model->getError('team')?></span><?php }?>
			</div>
		</div>
		
		<div class="control-group <?php if($model->getError('itlt_award')){ echo 'error';}?>">
			<label class="control-label" for="User_itlt_award"><b>ITLT Award</b> – this award is for someone who has achieved outstanding results and sets continuously high standards, refuses to settle for current achievements and constantly strives to do more.</label>
			<div class="controls">
				<?php echo $form->textField($model,'itlt_award',array('style'=>'','data-provide'=>"typeahead", 'data-items'=>"4", 'data-source'=>"[" . rtrim($user_names,','). "]")); ?>
				<?php if($model->getError('itlt_award')){?><span class="help-inline"><?php echo $model->getError('itlt_award')?></span><?php }?>
			</div>
		</div>
		<div class="row">
			<div class="span12" style="text-align:center;">
					<button type="submit"  class="btn btn-large btn-success">Save & Proceed</button>
			</div>
		</div>
<?php $this->endWidget();?>		
	</div>

</div>
<div class="row">
	<div class="span12" style="margin-top:40px;font-size:10px;color:#555;">
		<p><i>None of this information is going to be shared outside M&S</i></p>
	</div>
</div>



<script>

$(function() {
	$('.typeahead').typeahead()
}
</script>