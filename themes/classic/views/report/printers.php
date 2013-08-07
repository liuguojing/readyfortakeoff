<div class="container top">
	<div class="row">
		<div class="span8 offset2" style="text-align:center;margin-bottom:10px;">
			<h1>Printers Report</h1>
			<span><?php echo CHtml::link('Download',array('report/printers','download'=>1),array('class'=>'btn btn-info btn-large','style'=>'float:right;'))?></span>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>Participant Type</th><th>First Name</th><th>Last Name</th><th>Preferred Name</th><th>Gala Dinner</th>
					</tr>
				</thead>
				<tr>
					
				
				<?php foreach($users as $user){?>
				<tr>
					<td><?php echo $user->type;?></td>
					<td><?php echo $user->first_name;?></td>
					<td><?php echo $user->last_name;?></td>
					<td><?php echo $user->preferred_name;?></td>
					<td><?php echo $user->gala_dinner_menu;?></td>
				</tr>
				<?php if($user->has_guest==1 && $user->guest){?>
				<tr>
					<td>Guest</td>
					<td><?php echo $user->guest->first_name;?></td>
					<td><?php echo $user->guest->last_name;?></td>
					<td><?php echo $user->guest->first_name;?></td>
					<td><?php echo $user->guest->gala_dinner_menu;?></td>
				</tr>
				<?php }}?>
			</table>
		</div>
	</div>
</div>

