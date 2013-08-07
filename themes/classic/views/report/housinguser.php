<table>
<tr>
	<td>Reg ID</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Participant Type</td>
	<td>Check in date</td>
	<td>Check out date</td>
	<td>Travel arr date</td>
	<td>Travel dep date</td>
	<td>Room type</td>
	<td>Single or Double Occupancy</td>
	<td>Hotel Venue</td>
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo 'W'.$user->id;?></td>
	<td><?php echo $user->first_name?></td>
	<td><?php echo $user->last_name?></td>
	<td><?php echo $user->type;?></td>
	<td><?php echo $user->hotel_arrival_date?></td>
	<td><?php echo $user->hotel_departure_date?></td>
	<td><?php echo $user->fi_adate?></td>
	<td><?php echo $user->fi_ddate?></td>
	<td><?php echo $user->hotel_type?></td>
	<td><?php echo $user->room_type?></td>
	<td><?php echo $user->hotel_venue;?></td>
</tr>
<?php }?>

</table>