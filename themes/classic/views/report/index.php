<div class="container top">
	<div class="row">
		<div class="span12" style="text-align:center;margin-bottom:40px;">
			<h1>Reports</h1>
			<p>
			
			</p>
		</div>
	</div>
	<?php if(Yii::app()->user->name == 'client'|| in_array(Yii::app()->user->name ,array( 'YYO' ,'Dickie','Caroline'))){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/registation" class="btn btn-large btn-primary" ><i class="icon-th icon-white"></i>Registration Report</a><p>Summary of Registrants.</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/download" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> Full Download</a><p>This is Full Download</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/housing" class="btn btn-large btn-primary"><i class="icon-home icon-white"></i> Housing Report</a><p>This is House Report</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/transfer" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> Transfer Report</a><p>This is Transfer Report</p></div>
	</div>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/dietary" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Dietary Requirements</a><p>This is Dietary Requirements</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/galadinner" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i> Gala Dinner Report</a><p>This is Gala Dinner Report</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/teamdinner" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i> Team Dinner Report</a><p>This is Team Dinner Report</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/galatable" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i> Gala Table Plan Report</a><p>This is Gala Table Plan</p></div>
	</div>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/printers" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> Printers Report</a><p>csv download</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/amex" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> AMEX Travel Download</a><p>AMEX Travel Download</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/dmc" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i>DMC Tours & Activity Report</a><p>New registrations csv download for DMC.</p></div>
	</div>
	<?php }elseif(Yii::app()->user->name=="Amex"){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/transfer" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> Transfer Report</a><p>This is Transfer Report</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/amex" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i> AMEX Travel Download</a><p>AMEX Travel Download</p></div>
	</div>
	<?php }elseif(Yii::app()->user->name=="DMC"){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/dmc" class="btn btn-large btn-primary"><i class="icon-user icon-white"></i>DMC Tours & Activity Report</a><p>New registrations csv download for DMC.</p></div>
	</div>
	<?php }elseif(Yii::app()->user->name=="NTE"){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/dietary" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Dietary Requirements</a><p>This is Dietary Requirements</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/galadinner" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i> Gala Dinner Report</a><p>Menu Option for Gala Dinner</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/teamdinner" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i> Team Dinner Report</a><p>This is Team Dinner Report</p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/galatable" class="btn btn-large btn-primary"><i class="icon-gift icon-white"></i>Gala Table Plan Report</a><p>Table Plan Summary and csv download</p></div>
	</div>
	<?php }elseif(Yii::app()->user->name=='onsite'){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteAttended" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Attended</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGaladinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Gala Dinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteTeamdinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Teamdinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGalatable" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Galatable</a><p></p></div>
	</div>
	
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/gift" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Bose Gift Redemption Report</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/ipad" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Amex Card Redemption Report</a><p></p></div>
	</div>
	<?php }?>
	<?php if(in_array(Yii::app()->user->name,array('Dickie','Caroline','client'))){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteAttended" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Attended</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGaladinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Gala Dinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteTeamdinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Teamdinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGalatable" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Galatable</a><p></p></div>
	</div>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/gift" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Bose Gift Redemption Report</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/ipad" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Amex Card Redemption Report</a><p></p></div>
	</div>
	<?php }?>
	<?php if(in_array(Yii::app()->user->name,array('NTE'))){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteAttended" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Attended</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGaladinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Gala Dinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteTeamdinner" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Teamdinner</a><p></p></div>
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteGalatable" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Galatable</a><p></p></div>
	</div>
	<?php }?>
	<?php if(in_array(Yii::app()->user->name,array('DMC','Amex'))){?>
	<div class="row">
		<div class="span3"><a style="width:200px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);" href="<?php echo Yii::app()->request->baseUrl;?>/index.php/report/onsiteAttended" class="btn btn-large btn-primary"><i class="icon-list-alt icon-white"></i> Onsite Attended</a><p></p></div>
	</div>
	<?php }?>
</div>