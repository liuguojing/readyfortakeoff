<div class="container top">
	<h1>Amex Card Redemption</h1>
	<div id="ipad" class="row">
		<?php
			foreach(Yii::app()->user->getFlashes() as $key => $message) {
				echo '<div class="span12"><p class="alert alert-' . $key . '">' . $message . "</p></div>\n";
			}
		?>
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array('class'=>'form-horizontal','onsubmit'=>'test();'),
		)); ?>
		<div class="row">
			<div class="span6">
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
			    <label class="control-label" for="inputEmail">Category</label>
			    <div class="controls">
			      <input type="text" id="inputEmail" placeholder="Category" readonly=readonly value="<?php echo $model->type;?>">
			    </div>
			  </div>
			</div>
			<div class="span6">
			  <div class="control-group">
			    <label class="control-label" for="inputEmail">If Guest</label>
			    <div class="controls">
			    	<input value="<?php if($model->has_guest == 1){echo 'Yes';}else{echo "No";}?>" type="text" readonly=readonly> 
			    
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="inputEmail">Signature Time</label>
			    <div class="controls">
			      <input type="text" id="inputEmail" placeholder="Signature Time" readonly=readonly value="<?php echo $model->ipad_at;?>">
			    </div>
			  </div>
			  <div class="control-group">
			    <label class="control-label" for="inputEmail">Last Updated Time</label>
			    <div class="controls">
			      <input type="text" id="inputEmail" placeholder="Last Updated Time" readonly=readonly value="<?php echo $model->ipadupdated_at;?>">
			    </div>
			  </div>
			 </div>
		 </div>
		 <div class="row">
		 	<div class="span12">
		 		<div class="control-group">
				    <label class="control-label" for="User_headset">Amount</label>
				    <div class="controls">
				       <?php if($model->has_ipad){
				       		echo $form->dropDownList($model,'amount',$model->getAmountList(),array('disabled'=>'disabled'));
				       }else{
				       		echo $form->dropDownList($model,'amount',$model->getAmountList());
				       }?>
				       <?php if($model->getAmountList() == array('800'=>'800')){?>
				       	<span class="alert alert-success" style="margin-left:10px;">2 × $400</span>
				       <?php }?>
				       <?php if($model->getAmountList() == array('500'=>'500')){?>
				       	<span class="alert alert-success" style="margin-left:10px;">2 × $250</span>
				       <?php }?>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="User_headset"></label>
				    <div class="controls">
				    	<?php 
				    	$disabled = array('separator' => '','disabled'=>'disabled', 'template' => '<li class="q6" style="list-style: none outside none;display:block;margin:10px;">{input} {label} </li>', 'labelOptions' => array('style' => 'display:inline;'));
				    	$undisabled = array('separator' => '', 'template' => '<li class="q6" style="list-style: none outside none;display:block;margin:10px;">{input} {label} </li>', 'labelOptions' => array('style' => 'display:inline;'));
				    	$coupon = $model->coupon == array(1)?$disabled:$undisabled;
				    	$travel = $model->travel_ticket == array(1)?$disabled:$undisabled;
				    	$guest_coupon = $model->guest_coupon == array(1)?$disabled:$undisabled;
				    	$guest_travel = $model->guest_travel_ticket == array(1)?$disabled:$undisabled;
				    	?>
				       <div class="row">
				       	<div class="span5">
				       	<?php echo $form->CheckBoxList($model,'coupon',array('1'=>"Winner Circle Lounge Voucher"),$coupon);?>
				       	<?php echo $form->CheckBoxList($model,'travel_ticket',array('1'=>"Winner Transport Ticket"),$travel);?>
				       	</div>
				       	<div class="span5">
				       	<?php if($model->has_guest == 1){?>
				       	<?php echo $form->CheckBoxList($model,'guest_coupon',array('1'=>"Guest Circle Lounge Voucher"),$guest_coupon);?>
				       	<?php echo $form->CheckBoxList($model,'guest_travel_ticket',array('1'=>"Guest Transport Ticket"),$guest_travel);?>
				       	<?php }?>
				       	</div>
				       </div>
				    </div>
				  </div>
		 	</div>
		  </div>
		  <div class="row">	
		  <div class="span12">
		  	<div class="contorols" style="margin-left:80px;">
			    <?php $hide = '';
			    if($model->has_ipad){
			    	echo CHtml::image(Yii::app()->request->baseUrl . '/uploads/' . $model->id . '.png','')?>
			    <?php }else{?>
			    <p style="color:red">I confirm that I am the winner named above and am in receipt of the dollar value and checked items</p>
				<canvas class="<?php echo $hide;?>" id="colors_sketch" width="720px" height="400px" style="background-color: #eee;"></canvas>
			    <?php }?>
		  	</div>
		  </div>
		  
		  <div class="control-group span12">
		    <label class="control-label" for=""></label>
		    <div class="controls">
			  <?php echo $form->hiddenField($model,'id');?>
			  <?php if($model->has_ipad){?>
			  <button type="submit"  class="btn  btn-warning">Save</button>
			  <?php }else{?>
			  <a id="clean" class="btn  btn-warning" data-clean="yes" href="#colors_sketch" style="margin-right:80px">Clean</a>
			  <a id="save" class="btn  btn-warning" data-save="<?php echo $model->id;?>" href="#colors_sketch" >Save</a>
			  <?php }?>
			  <?php echo CHtml::link('Back',array('searchIpad'),array('class'=>'btn btn-warning','style'=>"margin-left:80px"));?>
		    </div>
		  </div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/sketch.js"></script>
<script type="text/javascript">
  $(function() {
    $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
      $('#colors_demo .tools').append("<a href='#colors_sketch' data-color='" + this + "' style='width: 10px; background: " + this + ";'></a> ");
    });
    $.each([3, 5, 10, 15], function() {
      $('#colors_demo .tools').append("<a href='#colors_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
    });
    $('#colors_sketch').sketch();
  });
  function test(){
      var canvas = document.createElement("canvas");
      alert(canvas.toDataUrl());
      return false;
  }
</script>