<table>
<tr>
	<td colspan=8 style="text-align:center;background-color:#99ccff">Registration Information</td>
	<td colspan=39 style="text-align:center;background-color:#999999">Flight Information</td>
</tr>
<tr>
	<td>Participant Type</td>
	<td>Reg ID</td>
	<td>Passport Given Name(s)</td>
	<td>Passport Surname</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Email</td>
	<td>Mobile Number</td>
	<td>Hotel</td>
	<td>Destination City </td>
	<td style="background-color:#ffcc99">Status</td>
	<td style="background-color:#ccffcc">DATE</td>
	<td style="background-color:#ccffcc">FLIGHT</td>
	<td style="background-color:#ccffcc">FROM</td>
	<td style="background-color:#ccffcc">TO</td>
	<td style="background-color:#ccffcc">DEP</td>
	<td style="background-color:#ccffcc">ARR</td>
	<td style="background-color:#ccffcc">DATE</td>
	<td style="background-color:#ccffcc">FLIGHT</td>
	<td style="background-color:#ccffcc">FROM</td>
	<td style="background-color:#ccffcc">TO</td>
	<td style="background-color:#ccffcc">DEP</td>
	<td style="background-color:#ccffcc">ARR</td>
	<td style="background-color:#ccffcc">DATE</td>
	<td style="background-color:#ccffcc">FLIGHT</td>
	<td style="background-color:#ccffcc">FROM</td>
	<td style="background-color:#ccffcc">TO</td>
	<td style="background-color:#ccffcc">DEP</td>
	<td style="background-color:#ccffcc">ARR</td>
	<td style="background-color:#ffcc99">Arrival date into Sydney</td>
	<td style="background-color:#ffcc99">Departure date from Sydney</td>
	<td style="background-color:#99ccff">DATE</td>
	<td style="background-color:#99ccff">FLIGHT</td>
	<td style="background-color:#99ccff">FROM</td>
	<td style="background-color:#99ccff">TO</td>
	<td style="background-color:#99ccff">DEP</td>
	<td style="background-color:#99ccff">ARR</td>
	<td style="background-color:#99ccff">DATE</td>
	<td style="background-color:#99ccff">FLIGHT</td>
	<td style="background-color:#99ccff">FROM</td>
	<td style="background-color:#99ccff">TO</td>
	<td style="background-color:#99ccff">DEP</td>
	<td style="background-color:#99ccff">ARR</td>
	<td style="background-color:#99ccff">DATE</td>
	<td style="background-color:#99ccff">FLIGHT</td>
	<td style="background-color:#99ccff">FROM</td>
	<td style="background-color:#99ccff">TO</td>
	<td style="background-color:#99ccff">DEP</td>
	<td style="background-color:#99ccff">ARR</td>
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->type;?></td>
	<td><?php echo 'W'.$user->id;?></td>
	<td><?php echo $user->ga_firstname?></td>
	<td><?php echo $user->ga_lastname?></td>
	<td><?php echo $user->first_name?></td>
	<td><?php echo $user->last_name?></td>
	<td><?php echo $user->email?></td>
	<td><?php echo $user->telephone_number_cell?></td>
	<td><?php echo $user->hotel?></td>
	<td><?php echo $user->destination_city;?> </td>

	<td><?php echo $user->fi_status?></td>
	<td><?php echo $user->fi_adate1?></td>
	<td><?php echo $user->fi_aflight1?></td>
	<td><?php echo $user->fi_afrom1?></td>
	<td><?php echo $user->fi_ato1?></td>
	<td><?php echo $user->fi_adep1?></td>
	<td><?php echo $user->fi_aarr1?></td>
	<td><?php echo $user->fi_adate2?></td>
	<td><?php echo $user->fi_aflight2?></td>
	<td><?php echo $user->fi_afrom2?></td>
	<td><?php echo $user->fi_ato2?></td>
	<td><?php echo $user->fi_adep2?></td>
	<td><?php echo $user->fi_aarr2?></td>
	<td><?php echo $user->fi_adate3?></td>
	<td><?php echo $user->fi_aflight3?></td>
	<td><?php echo $user->fi_afrom3?></td>
	<td><?php echo $user->fi_ato3?></td>
	<td><?php echo $user->fi_adep3?></td>
	<td><?php echo $user->fi_aarr3?></td>
	<td><?php echo $user->fi_adate?></td>
	<td><?php echo $user->fi_ddate?></td>
	<td><?php echo $user->fi_ddate1?></td>
	<td><?php echo $user->fi_dflight1?></td>
	<td><?php echo $user->fi_dfrom1?></td>
	<td><?php echo $user->fi_dto1?></td>
	<td><?php echo $user->fi_ddep1?></td>
	<td><?php echo $user->fi_darr1?></td>
	<td><?php echo $user->fi_ddate2?></td>
	<td><?php echo $user->fi_dflight2?></td>
	<td><?php echo $user->fi_dfrom2?></td>
	<td><?php echo $user->fi_dto2?></td>
	<td><?php echo $user->fi_ddep2?></td>
	<td><?php echo $user->fi_darr2?></td>
	<td><?php echo $user->fi_ddate3?></td>
	<td><?php echo $user->fi_dflight3?></td>
	<td><?php echo $user->fi_dfrom3?></td>
	<td><?php echo $user->fi_dto3?></td>
	<td><?php echo $user->fi_ddep3?></td>
	<td><?php echo $user->fi_darr3?></td>
</tr>
<?php if($user->has_guest==1 && $user->guest){?>
<tr>
	<td>Guest</td>
	<td><?php echo 'W'.$user->id.'G';?></td>
	<td><?php echo $user->guest->ga_firstname?></td>
	<td><?php echo $user->guest->ga_lastname?></td>
	<td></td>
	<td></td>
	<td><?php echo $user->hotel?></td>
	<td><?php echo $user->destination_city;?> </td>
	<td><?php echo $user->guest->fi_status?></td>
	<td><?php echo $user->guest->fi_adate1?></td>
	<td><?php echo $user->guest->fi_aflight1?></td>
	<td><?php echo $user->guest->fi_afrom1?></td>
	<td><?php echo $user->guest->fi_ato1?></td>
	<td><?php echo $user->guest->fi_adep1?></td>
	<td><?php echo $user->guest->fi_aarr1?></td>
	<td><?php echo $user->guest->fi_adate2?></td>
	<td><?php echo $user->guest->fi_aflight2?></td>
	<td><?php echo $user->guest->fi_afrom2?></td>
	<td><?php echo $user->guest->fi_ato2?></td>
	<td><?php echo $user->guest->fi_adep2?></td>
	<td><?php echo $user->guest->fi_aarr2?></td>
	<td><?php echo $user->guest->fi_adate3?></td>
	<td><?php echo $user->guest->fi_aflight3?></td>
	<td><?php echo $user->guest->fi_afrom3?></td>
	<td><?php echo $user->guest->fi_ato3?></td>
	<td><?php echo $user->guest->fi_adep3?></td>
	<td><?php echo $user->guest->fi_aarr3?></td>
	<td><?php echo $user->guest->fi_adate?></td>
	<td><?php echo $user->guest->fi_ddate?></td>
	<td><?php echo $user->guest->fi_ddate1?></td>
	<td><?php echo $user->guest->fi_dflight1?></td>
	<td><?php echo $user->guest->fi_dfrom1?></td>
	<td><?php echo $user->guest->fi_dto1?></td>
	<td><?php echo $user->guest->fi_ddep1?></td>
	<td><?php echo $user->guest->fi_darr1?></td>
	<td><?php echo $user->guest->fi_ddate2?></td>
	<td><?php echo $user->guest->fi_dflight2?></td>
	<td><?php echo $user->guest->fi_dfrom2?></td>
	<td><?php echo $user->guest->fi_dto2?></td>
	<td><?php echo $user->guest->fi_ddep2?></td>
	<td><?php echo $user->guest->fi_darr2?></td>
	<td><?php echo $user->guest->fi_ddate3?></td>
	<td><?php echo $user->guest->fi_dflight3?></td>
	<td><?php echo $user->guest->fi_dfrom3?></td>
	<td><?php echo $user->guest->fi_dto3?></td>
	<td><?php echo $user->guest->fi_ddep3?></td>
	<td><?php echo $user->guest->fi_darr3?></td>
</tr>
<?php }}?>

</table>