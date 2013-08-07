<?php 
	$user_attributes = User::model()->attributes;
	$guest_attributes = Guest::model()->attributes;
	unset($user_attributes['office_location']);
	unset($user_attributes['department']);
	unset($user_attributes['telephone_number_desk']);
	unset($user_attributes['password']);
	unset($user_attributes['date_of_birth']);
	unset($user_attributes['dietary_requirements']);
	unset($user_attributes['passport']);
	unset($user_attributes['special_requests']);
	unset($user_attributes['nationality']);
	unset($user_attributes['airport_name']);
	unset($user_attributes['airport_code']);
	unset($user_attributes['travel_policy']);
	unset($user_attributes['visa_policy']);
	unset($user_attributes['gala_dinner']);
	unset($user_attributes['other_activity']);
	
	unset($user_attributes['crew_diet_requirements']);
	unset($user_attributes['crew_other_info']);
	unset($user_attributes['crew_menu_choice']);
	
	unset($user_attributes['preferred_airline_frequent_flyer_number']);
	
	unset($user_attributes['need_visa']);
	unset($user_attributes['room_requirements']);
	unset($user_attributes['crew_unifrom_size']);
	unset($user_attributes['gala_dinner_dietary']);
	unset($user_attributes['gender']);
	unset($user_attributes['country']);
?>

<table>
<tr>
	<td colspan="<?php echo count($user_attributes);?>">User Information</td>
	<td colspan="<?php echo count($guest_attributes);?>">Guest Information</td>
</tr>
<tr>
	<?php foreach($user_attributes as $key=>$attribute){?>
	<td><?php echo User::model()->getAttributeLabel($key); ?></td>
	<?php }?>
	
	<?php foreach($guest_attributes as $key=>$attribute){?>
	<td><?php echo Guest::model()->getAttributeLabel($key); ?></td>
	<?php }?>
</tr>
	<?php foreach($users as $user){?>
	<tr>
	<?php foreach($user_attributes as $key=>$attribute){?>
	<td><?php echo $user->printAttribute($key); ?></td>
	<?php }?>
	<?php foreach($guest_attributes as $key=>$attribute){?>
	<td><?php echo ($user->has_guest==1 && $user->guest)?$user->guest->printAttribute($key):''; ?></td>
	<?php }?>
	</tr>
	<?php }?>
<?php /**?>
<tr>
	<td>RegDetails: Primary ID</td>
	<td>RegDetail: RSVP Status</td>
	<td>RegDetail: Respond Date</td>
	<td>Contact: First Name</td>
	<td>Contact: Preferred First Name</td>
	<td>Contact: Last Name</td>
	<td>RegDetail: Participant Type</td>
	<td>Q&A: Are you bringing a guest</td>
	<td>RegDetail: Guest List</td>
	<td>Contact: Manager's Name</td>
	<td>Contact: Business Phone</td>
	<td>Contact: Home Phone</td>
	<td>Contact: Mobile Phone</td>
	<td>Contact: Business City</td>
	<td>Contact: Nationality</td>
	<td>Contact: Gender</td>
	<td>Contact: Primary Alt FirstName</td>
	<td>Contact: Primary Alt Day Phone Number</td>
	<td>Contact: Primary Alt Relationship</td>
	<td>Accomm: Check In Date</td>
	<td>Accomm: Check Out Date</td>
	<td>Accomm: Special Requirements</td>
	<td>Q&A: How many times have you been to Winners Circle</td>
	<td>Q&A: How many years have you been employed by Gartner</td>
	<td>Q&A: Were you a winner for any of these previous Winners Circle events?</td>
	<td>Q&A: Do you have any special dietary requirements</td>
	<td>Q&A: Other</td>
	<td>Q&A: Main course menu choice:</td>
	<td>Q&A: Crew Uniform Size</td>
	<td>RegDetail: Reason for Declining</td>
	
</tr>

<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->id;?></td>
	<td><?php echo $user->getStatusText($user->status);?></td>
	<td><?php echo $user->updated_at?></td>
	<td><?php echo $user->first_name?></td>
	<td><?php echo $user->first_name?></td>
	<td><?php echo $user->last_name?></td>
	<td><?php echo $user->type?></td>
	<td><?php echo $user->getHasGuestText($user->has_guest)?></td>
	<td><?php echo $user->guest?$user->guest->first_name . ' '. $user->guest->last_name:"";?></td>
	<td><?php echo $user->managers_name;?></td>
	<td><?php echo $user->daytime_phone?></td>
	<td><?php echo $user->evening_phone?></td>
	<td><?php echo $user->telephone_number_cell?></td>
	<td><?php echo $user->work_city?></td>
	<td><?php echo $user->work_state?></td>
	<td><?php echo $user->gender?></td>
	<td><?php echo $user->emergency_contact_name?></td>
	<td><?php echo $user->emergency_contact_tel_number?></td>
	<td><?php echo $user->relationship_with_the_emergency_contact?></td>
	<td><?php echo $user->hotel_arrival_date?></td>
	<td><?php echo $user->hotel_departure_date?></td>
	<td><?php echo $user->room_type?></td>
	<td><?php echo $user->times?></td>
	<td><?php echo $user->years?></td>
	<td><?php echo $user->previous_winners?></td>
	<td><?php echo $user->team_dinner_dietary?></td>
	<td><?php echo $user->dietary_comment?></td>
	<td><?php echo $user->team_dinner_menu?></td>
	<td><?php echo $user->crew_unifrom_size?></td>
	<td><?php echo $user->declien_reason?></td>
</tr>
<?php }**/?>

</table>