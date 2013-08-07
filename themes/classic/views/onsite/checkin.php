<div class="container top">
	<h1>Attendee Information</h1>
	<div class="row">
		<?php
			foreach(Yii::app()->user->getFlashes() as $key => $message) {
				echo '<div class="span12"><p class="alert alert-' . $key . '">' . $message . "</p></div>\n";
			}
		?>
		</div>
		<div class="span12 form-horizontal" >
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('class'=>'form-inline'),
		)); ?>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">ID</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="ID" readonly=readonly value="<?php echo "W". $model->id;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Type</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Type" readonly=readonly value="<?php echo $model->type;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">First Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="First Name" readonly=readonly value="<?php echo $model->first_name;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Last Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Last Name" readonly=readonly value="<?php echo $model->last_name;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Dietary Requirements</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Dietary Requirements" readonly=readonly value="<?php echo $model->team_dinner_dietary;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Team</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Team" readonly=readonly value="<?php echo $model->team_dinner;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Team Dinner</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Team Dinner" readonly=readonly value="<?php echo $model->team_dinner_menu;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Gala Dinner</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Gala Dinner" readonly=readonly value="<?php echo $model->gala_dinner_menu;?>">
		    </div>
		  </div>
		  <?php if($model->has_guest == 1){?>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Guest First Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Guest First Name" readonly=readonly value="<?php echo $model->guest->first_name;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Guest Last Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Guest Last Name" readonly=readonly value="<?php echo $model->guest->last_name;?>">
		    </div>
		  </div>
		  <?php }?>
		  <div class="control-group">
		    <label class="control-label" for=""></label>
		    <div class="controls">
			  <?php echo $form->hiddenField($model,'id');?>
			  <button type="submit"  class="btn  btn-warning">Save</button>
		    </div>
		  </div>
		</div>
		<?php $this->endWidget(); ?>
</div>
<script>
	$('#User_id').focus();
</script>