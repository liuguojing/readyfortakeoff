<table class="table table-bordered table-hover table-striped">
	<thead>
		<tr>
			<th>Declined Date</th>
			<th>Catergory</th>
			<th>Winner First Name</th>
			<th>Winners Last Name</th>
			<!--th>email address</th>
			<th>Bringing guest yes / no</th>
			<th>Guest First name</th>
			<th>Guest last name</th-->
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user){?>
		<tr>
			<td><?php echo substr($user->updated_at,0,10);?></td>
			<td><?php echo $user->type;?></td>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<!-- td><?php echo $user->has_guest==1?'yes':'no';?></td>
			<td><?php echo !empty($user->guest)?$user->guest->first_name:'';?></td>
			<td><?php echo !empty($user->guest)?$user->guest->last_name:'';?></td> -->
		</tr>
		<?php }?>
	</tbody>
</table>
