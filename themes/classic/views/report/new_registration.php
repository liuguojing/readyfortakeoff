<div class="container top">
		<div class="row">
			<div class="span12" style="text-align:center;">
				<h1>New Registration Report</h1>
						<span><?php echo CHtml::link('Download',array('report/newRegistration','download'=>1),array('class'=>'btn btn-info btn-large','style'=>'float:right;'))?></span>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<caption>
						
					</caption>
					<thead>
						<tr>
							<th>Registration Date</th>
							<th>Catergory</th>
							<th>Winner First Name</th>
							<th>Winners Last Name</th>
							<th>Email Address</th>
							<th>Mobile Number</th>
							<th>Bringing guest yes / no</th>
							<th>Guest First name</th>
							<th>Guest Last name</th>
						</tr>
						<?php foreach($users as $user){?>
						<tr>
							<td><?php echo substr($user->updated_at,0,10);?></td>
							<td><?php echo $user->type;?></td>
							<td><?php echo $user->first_name;?></td>
							<td><?php echo $user->last_name;?></td>
							<td><?php echo $user->email;?></td>
							<td><?php echo $user->telephone_number_cell?></td>
							<td><?php echo $user->has_guest==1?'yes':'no';?></td>
							<td><?php echo ($user->has_guest==1 && !empty($user->guest))?$user->guest->first_name:'';?></td>
							<td><?php echo ($user->has_guest==1 && !empty($user->guest))?$user->guest->last_name:'';?></td>
						</tr>
						<?php }?>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
