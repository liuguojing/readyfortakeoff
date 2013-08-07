<div class="container top">
		<div class="row">
			<div class="span12" style="text-align:center">
				<h1>ONSITE GALA DINNER MEAL OPTIONS</h1>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Table Number</th>
							<th>Up Side-Down “Cottage Pie”</th>
							<th>Baingan Bharta “Open Faced Ravioli” (v) (Vegan)</th>
							<th>Miso Black Cod</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($meals as $table_no=>$menu){
								$subTotal=0;?>
						<tr>
							<td><?php echo $table_no?></td>
							<td><?php if(isset($menu['Cottage Pie'])){$subTotal+=$menu['Cottage Pie'];echo $menu['Cottage Pie'];}else{echo '0';}?></td>
							<td><?php if(isset($menu['Ravioli'])){$subTotal+=$menu['Ravioli'];echo $menu['Ravioli'];}else{echo '0';}?></td>
							<td><?php if(isset($menu['Cod'])){$subTotal+=$menu['Cod'];echo $menu['Cod'];}else{echo '0';}?></td>
							<td><?php echo CHtml::link($subTotal,array('onsiteExportGalaDietary','table_no'=>$table_no));?></td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>