<div class="container top">
	<h1>Check-in Portal</h1>
	<div class="row">
		<div class="span12">
			<p class="alert alert-success">This was collected on <?php echo $model->checkin_at;?><br/>
			ID:<?php echo "W" . $model->id;?><br/>
			First Name:<?php echo $model->first_name;?><br/>
			Last Name:<?php echo $model->last_name;?>
			</p>
		</div>
		<div class="span12">
			<?php echo CHtml::link('Back',array('search'),array('class'=>'btn btn-warning'));?>
		</div>
	</div>
</div>
