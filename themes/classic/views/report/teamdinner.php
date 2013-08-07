<?php 
$meat = array();
$fish = array();
$vegetarian = array();
$other = array();
$total = array();
foreach($users as $user){
	if($user->team_dinner_menu == 'Meat'){
		if(isset($meat[$user->team_dinner])){
			$meat[$user->team_dinner]++;
		}else{
			$meat[$user->team_dinner]=1;
		}
	}elseif($user->team_dinner_menu == 'Fish'){
		if(isset($fish[$user->team_dinner])){
			$fish[$user->team_dinner]++;
		}else{
			$fish[$user->team_dinner]=1;
		}
	}elseif($user->team_dinner_menu == 'Vegetarian'){
		if(isset($vegetarian[$user->team_dinner])){
			$vegetarian[$user->team_dinner]++;
		}else{
			$vegetarian[$user->team_dinner]=1;
		}
	}
	
	if(isset($total[$user->team_dinner])){
		$total[$user->team_dinner]++;
	}else{
		$total[$user->team_dinner]=1;
	}
	
}
foreach($guests as $guest){
	if($guest->team_dinner_menu == 'Meat'){
		if(isset($meat[$guest->user->team_dinner])){
			$meat[$guest->user->team_dinner]++;
		}else{
			$meat[$guest->user->team_dinner]=1;
		}
	}elseif($guest->team_dinner_menu == 'Fish'){
		if(isset($fish[$guest->user->team_dinner])){
			$fish[$guest->user->team_dinner]++;
		}else{
			$fish[$guest->user->team_dinner]=1;
		}
	}elseif($guest->team_dinner_menu == 'Vegetarian'){
		if(isset($vegetarian[$guest->user->team_dinner])){
			$vegetarian[$guest->user->team_dinner]++;
		}else{
			$vegetarian[$guest->user->team_dinner]=1;
		}
	}
	
	if(isset($total[$guest->user->team_dinner])){
		$total[$guest->user->team_dinner]++;
	}else{
		$total[$guest->user->team_dinner]=1;
	}
	
}
?>
<div class="container top">
		<div class="row">
			<div class="span8 offset2">
				<p>
				
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<caption>
						<h1>Team Dinner</h1>
					</caption>
					<thead>
						<tr>
							<th>Type</th><th>Total</th><th>Meat</th><th>Fish</th><th>Vegetarian</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach(User::model()->teamDinnerList() as $key=>$teamdinner){
								if(!empty($key)){?>
						<tr>
							<td><?php echo $teamdinner?>
							</td><td><?php echo isset($total[$teamdinner])?CHtml::link($total[$teamdinner],array('report/exportTeamDietary','team_dinner'=>$teamdinner,'team_dinner_menu'=>'')):0?></td>
							<td><?php echo isset($meat[$teamdinner])?CHtml::link($meat[$teamdinner],array('report/exportTeamDietary','team_dinner'=>$teamdinner,'team_dinner_menu'=>'Meat')):0?></td>
							<td><?php echo isset($fish[$teamdinner])?CHtml::link($fish[$teamdinner],array('report/exportTeamDietary','team_dinner'=>$teamdinner,'team_dinner_menu'=>'Fish')):0?></td>
							<td><?php echo isset($vegetarian[$teamdinner])?CHtml::link($vegetarian[$teamdinner],array('report/exportTeamDietary','team_dinner'=>$teamdinner,'team_dinner_menu'=>'Vegetarian')):0?></td>
						</tr>
						<?php }}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
