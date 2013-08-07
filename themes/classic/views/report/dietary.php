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
						<h1>Team Dietary Report</h1>
					</caption>
					<thead>
						<tr>
							<th></th>
							<?php $list = User::model()->getDietaryOptions();
							foreach($list as $dinner){?>
							<th><?php echo $dinner;?></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
						<?php foreach($teamDinners as $team=>$teamDinner){?>
						<tr>
							<td><?php echo $team?></td>
							<?php foreach($list as $dinner){?>
							<td><?php echo isset($teamDinner[$dinner])?CHtml::link($teamDinner[$dinner],array('report/exportTeamDietary','team_dinner'=>$team,'dietary'=>$dinner)):"0";?></td>
							<?php }?>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<caption>
						<h1>Gala Dietary Report</h1>
					</caption>
					<thead>
						<tr>
							<th></th>
							<?php $list = User::model()->getDietaryOptions();
							foreach($list as $dinner){?>
							<th><?php echo $dinner;?></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
						<?php foreach($galaDinners as $team=>$galaDinner){?>
						<tr>
							<td><?php echo $team?></td>
							<?php foreach($list as $dinner){?>
							<td><?php echo isset($galaDinner[$dinner])?CHtml::link($galaDinner[$dinner],array('report/exportGalaDietary','team_dinner'=>$team,'dietary'=>$dinner)):"0";?></td>
							<?php }?>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>