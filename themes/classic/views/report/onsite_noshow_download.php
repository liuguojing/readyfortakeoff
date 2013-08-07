<table>
<tr>
	<td>ID</td>
	<td>Type</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Team</td>
</tr>
	<?php foreach($users as $user){?>
	<?php if($user->has_checkin == 0){?>
	<tr>
		<td>W<?php echo $user->id;?></td>
		<td><?php echo $user->type;?></td>
		<td><?php echo $user->first_name;?></td>
		<td><?php echo $user->last_name;?></td>
		<td><?php echo $user->team_dinner;?></td>
	</tr>
	<?php }?>
	<?php if($user->has_guest && $user->guest->has_checkin == 0){?>
	<tr>
		<td>W<?php echo $user->id;?>G</td>
		<td><?php echo $user->type;?> Guest</td>
		<td><?php echo $user->guest->first_name;?></td>
		<td><?php echo $user->guest->last_name;?></td>
		<td><?php echo $user->team_dinner;?> Guest</td>
	</tr>
	<?php }?>
	<?php }?>
</table>