<table>
<tr>
	<th>Participant Type</th><th>First Name</th><th>Last Name</th><th>Preferred Name</th><th>Gala Dinner</th>
</tr>

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