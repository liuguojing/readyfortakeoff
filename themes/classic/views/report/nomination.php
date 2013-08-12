<div class="row">
	<div class="span12">
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Quality</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($qualities as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->quality);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Value</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($values as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->value);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Innovation</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($innovations as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->innovation);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Trust</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($trusts as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->trust);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Service</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($services as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->service);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>Team</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($teams as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->team);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<table class="table  table-bordered table-hover table-condensed">
			<caption style="text-align:center;">
				<h3>ITLT Awards</h3>
			</caption>
			<thead>
				<tr>
					<th style="width:40%">name</th><th>Votes</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach ($itlt_awards as $item){?>
			<tr>
				<td><?php echo CHtml::encode($item->itlt_award);?></td>
				<td><?php echo CHtml::encode($item->id);?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
	</div>

</div>