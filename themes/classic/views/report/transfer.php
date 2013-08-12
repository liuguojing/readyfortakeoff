<div class="row">
	<div class="span12">
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Outbound</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">Choice</th><th>Number</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($outbounds as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->outbound_time);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Return</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">Choice</th><th>Number</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($returns as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->return_time);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
	</div>

</div>