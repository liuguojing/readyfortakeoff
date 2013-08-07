<div class="container top">
	<h1>Bose Gift Redemption</h1>
	<div class="row">
		<div class="span12">
			<p class="alert alert-success">This was collected on <?php echo $model->gift_at;?><br/>
			First Name:<?php echo $model->first_name;?><br/>
			Last Name:<?php echo $model->last_name;?><br/>
			Gift Selection:<?php echo Gift::model()->getGiftName($model->headset);?></p>
		</div>
	</div>
	<div class="span12">
		<?php echo CHtml::link('Back',array('searchGift'),array('class'=>'btn btn-warning'));?>
	</div>
</div>
