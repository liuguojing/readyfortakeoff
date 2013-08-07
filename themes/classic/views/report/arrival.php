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
						<h1>Arrival Dates Report</h1>
						<div class="span12">
							Arrival Date:
						</div>
					</caption>
					<thead>
						<tr>
							<th>Participant Type</th>
							<?php foreach($dates as $date){?>
							<th><?php echo $date;?></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $type=>$user){?>
						<tr>
							<td><?php echo $type;?></td>
							<?php foreach($dates as $date){?>
							<td><?php echo isset($user[$date])?CHtml::link($user[$date],array('report/traveluser','type'=>$type,'fi_adate'=>$date,'travelType'=>'arr')):"0";?></td>
							<?php }?>
						</tr>
						<?php }?>
						<?php 
						$total = array();
						foreach($dates as $date){
							foreach($users as $user){
								if(isset($user[$date])){
									if(isset($total[$date])){
										$total[$date] +=$user[$date];
									}else{
										$total[$date] =$user[$date];
									}
								}
							}
						}
						?>
						<tr>
							<td>Total</td>
							<?php foreach($dates as $date){?>
							<th><?php echo isset($total[$date])?CHtml::link($total[$date],array('report/traveluser','type'=>User::model()->types,'fi_adate'=>'all','travelType'=>'arr')):'0';?></th>
							<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
