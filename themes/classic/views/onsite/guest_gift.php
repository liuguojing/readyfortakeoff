<div class="container top">
	<h1>Bose Gift Redemption</h1>
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
		    <label class="control-label" for="inputEmail">First Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email" readonly=readonly value="<?php echo $model->first_name;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Last Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Email" readonly=readonly value="<?php echo $model->last_name;?>">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Category</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" placeholder="Category" readonly=readonly value="<?php echo $model->user->type;?> Guest">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="User_headset">Gift Selection</label>
		  </div>
		       	<?php foreach($gifts as $gift){?>
         			<label for="User_headset_<?php echo $gift->id;?>">
		         		<div class="row">
		         			<div class="span4" style="width:160px;">
		         				<input type="radio" id="Guest_headset_<?php echo $gift->id;?>" name="Guest[headset]" value="<?php echo $gift->id;?>" />
		         				<?php echo CHtml::image(Yii::app()->request->baseUrl."/img/".$gift->image,$gift->name,array('style'=>'width:100px;height:100px;'))?>
		         			</div>
		         			<div class="span8">
			         			<div class="row">
				         			<p>
				         				<b><?php echo $gift->brand;?></b>
				         				<b style="margin-left:200px;"><?php echo $gift->code;?></b>
				         			</p>
				         			
			         			</div>
			         			<div class="row">
				         			<p><b><?php echo $gift->name;?></b></p>
				         			<p><?php echo $gift->description;?></p>
			         			</div>
		         			</div>
		         		</div>
         			</label>
		         	<hr/>
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
