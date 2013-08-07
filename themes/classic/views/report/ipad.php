<div class="container top">
		<div class="row">
			<div class="span12" style="text-align:center">
				<h1>Collection Report</h1>
				<span><?php echo CHtml::link('Download',array('report/ipad','download'=>1),array('class'=>'btn btn-info btn-large','style'=>'float:right;'))?></span>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table class="table table-bordered table-hover table-striped">
					<caption>
						<h1>Total:<?php echo count($users);?></h1>
					</caption>
					<thead>
						<tr>
							<th>ID</th>
							<th>Cagegory</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Amount</th>
							<th>Sign</th>
							<th>Winner Transport Ticket</th>
							<th>Winner Circle Lounge Voucher</th>
							<th>Guest Transport Ticket</th>
							<th>Guest Circle Lounge Voucher</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($users as $user){?>
						<tr>
							<td><?php echo 'W'.$user->id?></td>
							<td><?php echo $user->type?></td>
							<td><?php echo $user->first_name?></td>
							<td><?php echo $user->last_name?></td>
							<td><?php echo $user->amount?></td>
							<td><?php echo CHtml::image(Yii::app()->request->baseUrl . '/uploads/' . $user->id . '.png','',array('style'=>'width:100px;height:50px;'))?></td>
							<td><?php echo $user->travel_ticket==0?"No":"Yes";?></td>
							<td><?php echo $user->coupon==0?"No":"Yes";?></td>
							<td><?php echo $user->guest_travel_ticket==0?"No":"Yes";?></td>
							<td><?php echo $user->guest_coupon==0?"No":"Yes";?></td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>