<table>
<tr>
	<td>Participant Type</td>
	<td>Team</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Table No</td>
	<td>Menu</td>
	<td>Dietary</td>
	<td>Other Dietary Comment</td>
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->type;?></td>
	<td><?php echo $team_dinner=="VIP"?"VIP":$user->team_dinner;?></td>
	<td><?php echo $user->first_name?></td>
	<td><?php echo $user->last_name?></td>
	<td><?php echo $user->table_no?></td>
	<td><?php echo $user->gala_dinner_menu?></td>
	<td><?php echo $user->team_dinner_dietary;?></td>
	<td><?php echo $user->dietary_comment;?></td>
</tr>
<?php }
foreach($guests as $guest){?>
<tr>
	<td>Guest</td>
	<td><?php echo $guest->user->team_dinner;?></td>
	<td><?php echo $guest->first_name?></td>
	<td><?php echo $guest->last_name?></td>
	<td><?php echo $guest->user->table_no?></td>
	<td><?php echo $guest->gala_dinner_menu?></td>
	<td><?php echo $guest->team_dinner_dietary;?></td>
	<td><?php echo $guest->dietary_comment;?></td>
</tr>
<?php }?>

</table>