<div class="container top">
	<h1>iPad</h1>
	<div class="row">
		<div class="span12">
			<p class="alert alert-success">This was collected on <?php echo $model->ipad_at;?><br/>
			First Name:<?php echo $model->first_name;?><br/>
			Last Name:<?php echo $model->last_name;?>
			Amount: <?php echo $model->amount;?><br/>
			Sign: <?php echo CHtml::image(Yii::app()->request->baseUrl . '/uploads/' . $model->id . '.png','')?>
			</p>
			
		</div>
		<div class="span12">
			<?php echo CHtml::link('Back',array('searchIpad'),array('class'=>'btn btn-warning'));?>
		</div>
	</div>
</div>
