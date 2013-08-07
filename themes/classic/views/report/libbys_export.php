<table>
<tr>
	<td>Table No</td>
	<td>Team</td>
	<td>Participant Type</td>
	<td>Gala VIP</td>
	<td>Winner First Name</td>
	<td>Winner Last Name</td>
	<td>Guest</td>
	<td>Guest First Name</td>
	<td>Guest Last Name</td>
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->table_no;?></td>
	<td><?php echo $user->team_dinner;?></td>
	<td><?php echo $user->type;?></td>
	<td><?php echo $user->gala_dinner_vip=='Gala Dinner VIP'?'Yes':'No';?></td>
	<td><?php echo $user->first_name;?></td>
	<td><?php echo $user->last_name;?></td>
	<td><?php echo $user->has_guest==1?'Yes':'No';?></td>
	<td><?php echo ($user->has_guest==1 && isset($user->guest))?$user->guest->first_name:'';?></td>
	<td><?php echo ($user->has_guest==1 && isset($user->guest))?$user->guest->last_name:'';?></td>
</tr>
<?php }?>

</table>