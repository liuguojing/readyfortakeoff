<div class="container top">
		<div class="row">
			<div class="span12">
				<h1>Registration Reports</h1>
				<p>
				
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span3" style="text-align:center;"><?php echo CHtml::link('Accepted',array('report/registation','status'=>'1','#'=>'table'),array('style'=>'width:160px;','class'=>'btn btn-large btn-success'))?><p><?php echo $accepted;?></p></div>
			<div class="span3" style="text-align:center;"><?php echo CHtml::link('Declined',array('report/registation','status'=>'2','#'=>'table'),array('style'=>'width:160px;','class'=>'btn btn-large btn-danger'))?><p><?php echo $declined;?></p></div>
			<div class="span3" style="text-align:center;"><?php echo CHtml::link('Non-Responder',array('report/registation','status'=>'0','#'=>'table'),array('style'=>'width:160px;','class'=>'btn btn-large btn-warning'))?><p><?php echo $nofeedback;?></p></div>
			<div class="span3" style="text-align:center;"><?php echo CHtml::link('Total',array('report/registation','status'=>'1'),array('style'=>'width:160px;background-color:#388cbb;background-image:-webkit-linear-gradient(top, #2aabe2, #388cbb);','class'=>'btn btn-large btn-primary'))?><p><?php echo $accepted+$declined+$nofeedback;?></p></div>
		</div>
		<div class="row">
			<div class="span8 offset2" id="pie" style="text-align:center;">
				<canvas id="cvs" width="600" height="300">[No canvas support]</canvas>
				
			</div>
		</div>
	<div class="row">
		<div class="span12">
			<?php if($status==1){?>
			<table id="table" class="table table-bordered table-hover table-striped">
				<caption>
					<h1>SUMMARY</h1>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th width="200px;">Accepted</th><th width="200px;">Guest</th><th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Top Achievers</td><td><?php echo CHtml::link($users['Top Achievers'],array('report/users','type'=>'Top Achievers','status'=>$status));?></td><td><?php echo $guests['Top Achievers'];?></td><td><?php echo $users['Top Achievers']+$guests['Top Achievers'];?></td></tr>
					<tr><td>Eagles</td><td><?php echo CHtml::link($users['Eagles'],array('report/users','type'=>'Eagles','status'=>$status));?></td><td><?php echo $guests['Eagles'];?></td><td><?php echo $users['Eagles']+$guests['Eagles'];?></td></tr>
					<tr><td>Winners</td><td><?php echo CHtml::link($users['Winners'],array('report/users','type'=>'Winners','status'=>$status));?></td><td><?php echo $guests['Winners'];?></td><td><?php echo $users['Winners']+$guests['Winners'];?></td></tr>
					<tr><td>Host GVP</td><td><?php echo CHtml::link($users['Host GVP'],array('report/users','type'=>'Host GVP','status'=>$status));?></td><td><?php echo $guests['Host GVP'];?></td><td><?php echo $users['Host GVP']+$guests['Host GVP'];?></td></tr>
					<tr><td>Host GEN</td><td><?php echo CHtml::link($users['Host GEN'],array('report/users','type'=>'Host GEN','status'=>$status));?></td><td><?php echo $guests['Host GEN'];?></td><td><?php echo $users['Host GEN']+$guests['Host GEN'];?></td></tr>
					<tr><td>Operating Committee</td><td><?php echo CHtml::link($users['Operating Committee'],array('report/users','type'=>'Operating Committee','status'=>$status));?></td><td><?php echo $guests['Operating Committee'];?></td><td><?php echo $users['Operating Committee']+$guests['Operating Committee'];?></td></tr>
					<tr><td>TOTAL</td><td><?php echo CHtml::link($users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>$status));?></td><td><?php echo $guests['Top Achievers']+$guests['Eagles']+$guests['Winners']+$guests['Host GVP']+$guests['Host GEN']+$guests['Operating Committee'];?></td><td><?php echo $guests['Top Achievers']+$guests['Eagles']+$guests['Winners']+$guests['Host GVP']+$guests['Host GEN']+$guests['Operating Committee']+$users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'];?></td></tr>
				</tbody>
			</table>
			
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th width="200px;">Accepted</th><th width="200px;">Guest</th><th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Gartner Crew</td><td><?php echo CHtml::link($users['Gartner Crew'],array('report/users','type'=>'Gartner Crew','status'=>$status));?></td><td><?php echo $guests['Gartner Crew'];?></td><td><?php echo $users['Gartner Crew']+$guests['Gartner Crew'];?></td></tr>
					<tr><td>Crew</td><td><?php echo CHtml::link($users['Crew'],array('report/users','type'=>'Crew','status'=>$status));?></td><td><?php echo $guests['Crew'];?></td><td><?php echo $users['Crew']+$guests['Crew'];?></td></tr>
					<tr><td>TOTAL</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew'],array('report/users','type'=>'Gartner Crew,Crew','status'=>$status));?></td><td><?php echo $guests['Gartner Crew']+$guests['Crew'];?></td><td><?php echo $guests['Gartner Crew']+$guests['Crew']+$users['Gartner Crew']+$users['Crew'];?></td></tr>
				</tbody>
			</table>
			
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th width="200px;">Accepted</th><th width="200px;">Guest</th><th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>TOTAL (inc Crew)</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew']+$users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Gartner Crew,Crew,Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>$status));?></td><td><?php echo  $guests['Gartner Crew']+$guests['Crew']+$guests['Top Achievers']+$guests['Eagles']+$guests['Winners']+$guests['Host GVP']+$guests['Host GEN']+$guests['Operating Committee'];?></td><td><?php echo $guests['Top Achievers']+$guests['Eagles']+$guests['Winners']+$guests['Host GVP']+$guests['Host GEN']+$guests['Operating Committee']+$users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee']+$guests['Gartner Crew']+$guests['Crew']+$users['Gartner Crew']+$users['Crew'];?></td></tr>
				</tbody>
			</table>
			<?php }elseif($status == 2){?>
			<table id="table" class="table table-bordered table-hover table-striped">
				<caption>
					<h1>DECLINED SUMMARY</h1>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Decline</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Top Achievers</td><td><?php echo CHtml::link($users['Top Achievers'],array('report/users','type'=>'Top Achievers','status'=>2));?></td></tr>
					<tr><td>Eagles</td><td><?php echo CHtml::link($users['Eagles'],array('report/users','type'=>'Eagles','status'=>2));?></td></tr>
					<tr><td>Winners</td><td><?php echo CHtml::link($users['Winners'],array('report/users','type'=>'Winners','status'=>2));?></td></tr>
					<tr><td>Host GVP</td><td><?php echo CHtml::link($users['Host GVP'],array('report/users','type'=>'Host GVP','status'=>2));?></td></tr>
					<tr><td>Host GEN</td><td><?php echo CHtml::link($users['Host GEN'],array('report/users','type'=>'Host GEN','status'=>2));?></td></tr>
					<tr><td>Operating Committee</td><td><?php echo CHtml::link($users['Operating Committee'],array('report/users','type'=>'Operating Committee','status'=>2));?></td></tr>
					<tr><td>TOTAL (exc Gartner Crew)</td><td><?php echo CHtml::link($users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>2));?></td></tr>
				</tbody>
			</table>
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Accepted</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Gartner Crew</td><td><?php echo CHtml::link($users['Gartner Crew'],array('report/users','type'=>'Gartner Crew','status'=>$status));?></td></tr>
					<tr><td>Crew</td><td><?php echo CHtml::link($users['Crew'],array('report/users','type'=>'Crew','status'=>$status));?></td></tr>
					<tr><td>TOTAL (exc Crew)</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew'],array('report/users','type'=>'Gartner Crew,Crew','status'=>$status));?></td></tr>
				</tbody>
			</table>
			
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Accepted</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>TOTAL (inc Crew)</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew']+$users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Gartner Crew,Crew,Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>$status));?></td></tr>
				</tbody>
			</table>
			<?php }elseif($status == 0){?>
			<table id="table" class="table table-bordered table-hover table-striped">
				<caption>
					<h1>NON-RESPONDER SUMMARY</h1>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Non-Responder</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Top Achievers</td><td><?php echo CHtml::link($users['Top Achievers'],array('report/users','type'=>'Top Achievers','status'=>0));?></td></tr>
					<tr><td>Eagles</td><td><?php echo CHtml::link($users['Eagles'],array('report/users','type'=>'Eagles','status'=>0));?></td></tr>
					<tr><td>Winners</td><td><?php echo CHtml::link($users['Winners'],array('report/users','type'=>'Winners','status'=>0));?></td></tr>
					<tr><td>Host GVP</td><td><?php echo CHtml::link($users['Host GVP'],array('report/users','type'=>'Host GVP','status'=>0));?></td></tr>
					<tr><td>Host GEN</td><td><?php echo CHtml::link($users['Host GEN'],array('report/users','type'=>'Host GEN','status'=>0));?></td></tr>
					<tr><td>Operating Committee</td><td><?php echo CHtml::link($users['Operating Committee'],array('report/users','type'=>'Operating Committee','status'=>0));?></td></tr>
					<tr><td>TOTAL (exc Crew)</td><td><?php echo CHtml::link($users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>0));?></td></tr>
				</tbody>
			</table>
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Non-Responder</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Gartner Crew</td><td><?php echo CHtml::link($users['Gartner Crew'],array('report/users','type'=>'Gartner Crew','status'=>$status));?></td></tr>
					<tr><td>Crew</td><td><?php echo CHtml::link($users['Crew'],array('report/users','type'=>'Crew','status'=>$status));?></td></tr>
					<tr><td>TOTAL (exc Crew)</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew'],array('report/users','type'=>'Gartner Crew,Crew','status'=>$status));?></td></tr>
				</tbody>
			</table>
			
			<table class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="200px;">Participant Type</th><th>Non-Responder</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>TOTAL (inc Crew)</td><td><?php echo CHtml::link($users['Gartner Crew']+$users['Crew']+$users['Top Achievers']+$users['Eagles']+$users['Winners']+$users['Host GVP']+$users['Host GEN']+$users['Operating Committee'],array('report/users','type'=>'Gartner Crew,Crew,Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee','status'=>$status));?></td></tr>
				</tbody>
			</table>
			<?php }?>
		</div>
	</div>
	
	</div>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/RGraph.common.core.js" ></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/RGraph.pie.js" ></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/RGraph.common.dynamic.js" ></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/RGraph.common.tooltips.js" ></script>
    
	<script type="text/javascript">
	window.onload = function ()
    {
		var pie2 = new RGraph.Pie('cvs', [<?php echo $accepted;?>,<?php echo $declined;?>,<?php echo $nofeedback;?>]);
        pie2.Set('chart.colors', [
                                 RGraph.RadialGradient(pie2, 150,150,0,150,150,150,'white', '#51A351'),
                                 RGraph.RadialGradient(pie2, 150,150,0,150,150,150,'white', '#DA4F49'),
                                 RGraph.RadialGradient(pie2, 150,150,0,150,150,150,'white', '#FAA732'),
                                ]);
        pie2.Set('chart.exploded', 3);
        // pie2.Set('chart.shadow', true);
        pie2.Set('chart.labels', ['Accepted','Declined','Non-Responder']);
        pie2.Set('chart.tooltips', ['<b>Accepted</b><br />Accepted achieved <?php echo $accepted;?>',
                                    '<b>Declined</b><br />Declined achieved <?php echo $declined;?>',
                                    '<b>Non-Responder</b><br />Non-Responder achieved <?php echo $nofeedback;?>']);

        pie2.Draw();
    }
	</script>