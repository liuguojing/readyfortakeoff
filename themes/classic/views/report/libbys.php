<div class="container top">
		<div class="row">
			<div class="span12" style="text-align:center">
				<h1>LIBBY’S TABLE PLAN SUMMARY</h1>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Winner</th>
							<th>Guest</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($meals as $item){
								$subTotal=0;?>
						<tr>
							<td><?php echo $item['table_no']?></td>
							<td><?php echo $item['user_num']?></td>
							<td><?php echo $item['guest_num']?></td>
							<td><?php echo CHtml::link($item['user_num']+$item['guest_num'],array('exportLibbys','table_no'=>$item['table_no']));?></td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>