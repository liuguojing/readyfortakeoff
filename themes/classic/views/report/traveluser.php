<table>
<tr>
	<td colspan=26 style="text-align:center;background-color:#999999">THESE COLUMNS ARE TAKEN FROM THE REGISTRATION SYSTEM (can include any field that is captured)</td>
	<td colspan=<?php if($travelType=='arr'){ echo 20;}elseif($travelType=='dep'){echo 20;}else{echo 39;}?> style="text-align:center;background-color:#999999">THESE COLUMNS ARE BY AMEX TRAVEL</td>
<tr>
	<td>Participant Type</td>
	<td>Reg ID</td>
	<td>Passport Given Name(s)</td>
	<td>Passport Surname</td>
	<td>Email</td>
	<td>Daytime Phone</td>
	<td>Passport Number</td>
	<td>Passport Nationality</td>
	<td>Passport Gender</td>
	<td>Passport Country of Issue:</td>
	<td>Passport Expiration Date</td>
	<td>Passport Issue Date</td>
	<td>Passport Redress Number</td>
	<td>Preferred Departure Airport / City</td>
	<td>Preferred Depart date</td>
	<td>Preferred Return Date</td>
	<td>Preferred Seat Request</td>
	<td>Preferred Airline</td>
	<td>Frequent Flyer Number</td>
	<td>Other Information</td>
	<td>Destination City </td>
	<td>Hotel</td>
	<td>Date/time stamp of the registration</td>
	<td>Date of Birth</td>
	<td>Guest</td>
	<td>Dietary </td>
	<td style="background-color:#ffcc99">Status</td>
	<?php if($travelType=="arr"){?>
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
	<?php }elseif($travelType=="dep"){?>
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
	<?php }else{?>
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
	<?php }?>
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->type;?></td>
	<td><?php echo 'W'.$user->id;?></td>
	<td><?php echo $user->ga_firstname?></td>
	<td><?php echo $user->ga_lastname?></td>
	<td><?php echo $user->email?></td>
	<td><?php echo $user->daytime_phone?></td>
	<td><?php echo $user->ga_card_number?></td>
	<td><?php echo $user->ga_passport?></td>
	<td><?php echo $user->ga_gender?></td>
	<td><?php echo $user->ga_card_country?></td>
	<td><?php echo $user->ga_card_expiration_date?></td>
	<td><?php echo $user->ga_card_issue_date?></td>
	<td><?php echo $user->ga_redress_number?></td>
	<td><?php echo $user->airport_name?></td>
	<td><?php echo $user->departure_date?></td>
	<td><?php echo $user->return_date?></td>
	<td><?php echo $user->preferred_seat_request?></td>
	<td><?php echo $user->preferred_airline?></td>
	<td><?php echo $user->frequent_flyer_number?></td>
	<td><?php echo $user->other?></td>
	<td><?php echo $user->destination_city;?> </td>
	<td><?php echo $user->hotel?></td>
	<td><?php echo $user->updated_at;?></td>
	<td><?php echo $user->date_of_birth;?></td>
	<td><?php echo $user->has_guest==1?'Yes':'No';?></td>
	<td><?php echo $user->team_dinner_dietary;?> </td>

	<td><?php echo $user->fi_status?></td>
	<?php if($travelType=="arr"){?>
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
	<?php }elseif($travelType=="dep"){?>
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
	<?php }else{?>
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
	<?php }?>
</tr>
<?php if($user->guest){?>
<tr>
	<td>Guest</td>
	<td><?php echo 'W'.$user->id.'G';?></td>
	<td><?php echo $user->guest->ga_firstname?></td>
	<td><?php echo $user->guest->ga_lastname?></td>
	<td></td>
	<td></td>
	<td><?php echo $user->guest->ga_card_number?></td>
	<td><?php echo $user->guest->ga_passport?></td>
	<td><?php echo $user->guest->ga_gender?></td>
	<td><?php echo $user->guest->ga_card_country?></td>
	<td><?php echo $user->guest->ga_card_expiration_date?></td>
	<td><?php echo $user->guest->ga_card_issue_date?></td>
	<td><?php echo $user->guest->ga_redress_number?></td>
	<td><?php echo $user->guest->airport_name?></td>
	<td><?php echo $user->guest->departure_date?></td>
	<td><?php echo $user->guest->return_date?></td>
	<td><?php echo $user->guest->preferred_seat_request?></td>
	<td><?php echo $user->guest->preferred_airline?></td>
	<td><?php echo $user->guest->frequent_flyer_number?></td>
	<td><?php echo $user->other?></td>
	<td><?php echo $user->destination_city;?> </td>
	<td><?php echo $user->hotel?></td>
	<td><?php echo $user->updated_at;?></td>
	<td><?php echo $user->guest->date_of_birth;?></td>
	<td><?php echo 'Yes'?></td>
	<td><?php echo $user->guest->team_dinner_dietary;?> </td>
	<td><?php echo $user->guest->fi_status?></td>
	<?php if($travelType=="arr"){?>
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
	<?php }elseif($travelType=="dep"){?>
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
	<?php }else{?>
	
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
	<?php }?>
</tr>
<?php }}?>

</table>