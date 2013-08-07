<div class="container top">
		<div class="row">
			<div class="span12" style="text-align:center">
				<h1>ONSITE LIBBY’S TABLE PLAN SUMMARY</h1>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Table Number</th>
							<th>Team</th>
							<th>Winner</th>
							<th>Guest</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$total = array('user_num'=>0,'guest_num'=>0);
							foreach($meals as $item){
								$total['user_num'] += $item['user_num'];
								$total['guest_num'] += $item['guest_num'];
								$subTotal=0;?>
						<tr>
							<td><?php echo $item['table_no']?></td>
							<td><?php echo $item['team_dinner']?></td>
							<td><?php echo $item['user_num']?></td>
							<td><?php echo $item['guest_num']?></td>
							<td><?php echo CHtml::link($item['user_num']+$item['guest_num'],array('onsiteExportLibbys','table_no'=>$item['table_no']));?></td>
						</tr>
						<?php }?>
						<tr>
							<td>Total</td>
							<td><?php echo $total['user_num']?></td>
							<td><?php echo $total['guest_num']?></td>
							<td><?php echo CHtml::link($total['user_num']+$total['guest_num'],array('onsiteExportLibbys','table_no'=>'all'));?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>