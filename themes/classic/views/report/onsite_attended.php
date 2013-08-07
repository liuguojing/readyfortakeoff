<div class="container top">
	<div class="row">
		<div class="span12">
			<h1>Onsite Registration Reports</h1>
			<?php $formatter = new CNumberFormatter('EN');?>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table id="table" class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="120px;">Category</th><th>Registered</th><th>Attended</th><th>Percent</th><th>Guest Registered</th><th>Gueest Attended</th><th>Percent</th><th>Total Registered</th><th>Total Attended</th><th>Percent</th><th>Total No-Show</th><th>Percent</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Top Achievers</td>
						<td><?php echo $users['Top Achievers']['r'];?></td>
						<td><?php echo $users['Top Achievers']['a'];?></td>
						<td><?php echo $users['Top Achievers']['r']==0?'':$formatter->format('#,##0',$users['Top Achievers']['a'] * 100/$users['Top Achievers']['r']);?>%</td>
						<td><?php echo $guests['Top Achievers']['r'];?></td>
						<td><?php echo $guests['Top Achievers']['a'];?></td>
						<td><?php echo $guests['Top Achievers']['r']==0?'':$formatter->format('#,##0',$guests['Top Achievers']['a'] * 100/$guests['Top Achievers']['r']);?>%</td>
						<td><?php echo $guests['Top Achievers']['r']+$users['Top Achievers']['r'];?></td>
						<td><?php echo CHtml::link($guests['Top Achievers']['a']+$users['Top Achievers']['a'],array('report/attendedDownload','type'=>'Top Achievers'));?></td>
						<td><?php echo $guests['Top Achievers']['r']+$users['Top Achievers']['r']==0?'':$formatter->format('#,##0',($users['Top Achievers']['a'] +$guests['Top Achievers']['a']) * 100/($users['Top Achievers']['r']+$guests['Top Achievers']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Top Achievers']['r']+$users['Top Achievers']['r'] - ($guests['Top Achievers']['a']+$users['Top Achievers']['a']),array('report/noShowDownload','type'=>'Top Achievers'));?></td>
						<td><?php echo $guests['Top Achievers']['r']+$users['Top Achievers']['r']==0?'':$formatter->format('#,##0',($users['Top Achievers']['r'] +$guests['Top Achievers']['r'] - ($guests['Top Achievers']['a']+$users['Top Achievers']['a'])) * 100/($users['Top Achievers']['r']+$guests['Top Achievers']['r']));?>%</td>
						
					<tr>
					<tr>
						<td>Eagles</td>
						<td><?php echo $users['Eagles']['r'];?></td>
						<td><?php echo $users['Eagles']['a'];?></td>
						<td><?php echo $users['Eagles']['r']==0?'':$formatter->format('#,##0',$users['Eagles']['a'] * 100/$users['Eagles']['r']);?>%</td>
						<td><?php echo $guests['Eagles']['r'];?></td>
						<td><?php echo $guests['Eagles']['a'];?></td>
						<td><?php echo $guests['Eagles']['r']==0?'':($formatter->format('#,##0',$guests['Eagles']['a'] * 100/$guests['Eagles']['r']));?>%</td>
						<td><?php echo $guests['Eagles']['r']+$users['Eagles']['r'];?></td>
						<td><?php echo CHtml::link($guests['Eagles']['a']+$users['Eagles']['a'],array('report/attendedDownload','type'=>'Eagles'));?></td>
						<td><?php echo $guests['Eagles']['r']+$users['Eagles']['r']==0?'':$formatter->format('#,##0',($users['Eagles']['a'] +$guests['Eagles']['a']) * 100/($users['Eagles']['r']+$guests['Eagles']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Eagles']['r']+$users['Eagles']['r'] - ($guests['Eagles']['a']+$users['Eagles']['a']),array('report/noShowDownload','type'=>'Eagles'));?></td>
						<td><?php echo $guests['Eagles']['r']+$users['Eagles']['r']==0?'':$formatter->format('#,##0',(($users['Eagles']['r']+$guests['Eagles']['r']) - ($users['Eagles']['a'] +$guests['Eagles']['a'])) * 100/($users['Eagles']['r']+$guests['Eagles']['r']));?>%</td>
					<tr>
						<td>Winners</td>
						<td><?php echo $users['Winners']['r'];?></td>
						<td><?php echo $users['Winners']['a'];?></td>
						<td><?php echo $users['Winners']['r']==0?'':$formatter->format('#,##0',$users['Winners']['a'] * 100/$users['Winners']['r']);?>%</td>
						<td><?php echo $guests['Winners']['r'];?></td>
						<td><?php echo $guests['Winners']['a'];?></td>
						<td><?php echo $guests['Winners']['r']==0?'':$formatter->format('#,##0',$guests['Winners']['a'] * 100/$guests['Winners']['r']);?>%</td>
						<td><?php echo $guests['Winners']['r']+$users['Winners']['r'];?></td>
						<td><?php echo CHtml::link($guests['Winners']['a']+$users['Winners']['a'],array('report/attendedDownload','type'=>'Winners'));?></td>
						<td><?php echo $guests['Winners']['r']+$users['Winners']['r']==0?'':$formatter->format('#,##0',($users['Winners']['a'] +$guests['Winners']['a']) * 100/($users['Winners']['r']+$guests['Winners']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Winners']['r']+$users['Winners']['r'] - ($guests['Winners']['a']+$users['Winners']['a']),array('report/noShowDownload','type'=>'Winners'));?></td>
						<td><?php echo $guests['Winners']['r']+$users['Winners']['r']==0?'':$formatter->format('#,##0',($guests['Winners']['r']+$users['Winners']['r']-($users['Winners']['a'] +$guests['Winners']['a'])) * 100/($users['Winners']['r']+$guests['Winners']['r']));?>%</td>
					<tr>
						<td>Host GVP</td>
						<td><?php echo $users['Host GVP']['r'];?></td>
						<td><?php echo $users['Host GVP']['a'];?></td>
						<td><?php echo $users['Host GVP']['r']==0?'':$formatter->format('#,##0',$users['Host GVP']['a'] * 100/$users['Host GVP']['r']);?>%</td>
						<td><?php echo $guests['Host GVP']['r'];?></td>
						<td><?php echo $guests['Host GVP']['a'];?></td>
						<td><?php echo $guests['Host GVP']['r']==0?'':$formatter->format('#,##0',$guests['Host GVP']['a'] * 100/$guests['Host GVP']['r']);?>%</td>
						<td><?php echo $guests['Host GVP']['r']+$users['Host GVP']['r'];?></td>
						<td><?php echo CHtml::link($guests['Host GVP']['a']+$users['Host GVP']['a'],array('report/attendedDownload','type'=>'Host GVP'));?></td>
						<td><?php echo $guests['Host GVP']['r']+$users['Host GVP']['r']==0?'':$formatter->format('#,##0',($users['Host GVP']['a'] +$guests['Host GVP']['a']) * 100/($users['Host GVP']['r']+$guests['Host GVP']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Host GVP']['r']+$users['Host GVP']['r'] - ($guests['Host GVP']['a']+$users['Host GVP']['a']),array('report/noShowDownload','type'=>'Host GVP'));?></td>
						<td><?php echo $guests['Host GVP']['r']+$users['Host GVP']['r']==0?'':$formatter->format('#,##0',($guests['Host GVP']['r']+$users['Host GVP']['r']-($users['Host GVP']['a'] +$guests['Host GVP']['a'])) * 100/($users['Host GVP']['r']+$guests['Host GVP']['r']));?>%</td>
					<tr>
						<td>Host GEN</td>
						<td><?php echo $users['Host GEN']['r'];?></td>
						<td><?php echo $users['Host GEN']['a'];?></td>
						<td><?php echo $users['Host GEN']['r']==0?'':$formatter->format('#,##0',$users['Host GEN']['a'] * 100/$users['Host GEN']['r']);?>%</td>
						<td><?php echo $guests['Host GEN']['r'];?></td>
						<td><?php echo $guests['Host GEN']['a'];?></td>
						<td><?php echo $guests['Host GEN']['r']==0?'':($guests['Host GEN']['a'] * 100/$guests['Host GEN']['r']);?>%</td>
						<td><?php echo $guests['Host GEN']['r']+$users['Host GEN']['r'];?></td>
						<td><?php echo CHtml::link($guests['Host GEN']['a']+$users['Host GEN']['a'],array('report/attendedDownload','type'=>'Host GEN'));?></td>
						<td><?php echo $guests['Host GEN']['r']+$users['Host GEN']['r']==0?'':$formatter->format('#,##0',($users['Host GEN']['a'] +$guests['Host GEN']['a']) * 100/($users['Host GEN']['r']+$guests['Host GEN']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Host GEN']['r']+$users['Host GEN']['r'] - ($guests['Host GEN']['a']+$users['Host GEN']['a']),array('report/noShowDownload','type'=>'Host GEN'));?></td>
						<td><?php echo $guests['Host GEN']['r']+$users['Host GEN']['r']==0?'':$formatter->format('#,##0',($guests['Host GEN']['r']+$users['Host GEN']['r'] - ($users['Host GEN']['a'] +$guests['Host GEN']['a'])) * 100/($users['Host GEN']['r']+$guests['Host GEN']['r']));?>%</td>
						
					<tr>
						<td>Operating Committee</td>
						<td><?php echo $users['Operating Committee']['r'];?></td>
						<td><?php echo $users['Operating Committee']['a'];?></td>
						<td><?php echo $users['Operating Committee']['r']==0?'':$formatter->format('#,##0',$users['Operating Committee']['a'] * 100/$users['Operating Committee']['r']);?>%</td>
						<td><?php echo $guests['Operating Committee']['r'];?></td>
						<td><?php echo $guests['Operating Committee']['a'];?></td>
						<td><?php echo $guests['Operating Committee']['r']==0?'':$formatter->format('#,##0',$guests['Operating Committee']['a'] * 100/$guests['Operating Committee']['r']);?>%</td>
						<td><?php echo $guests['Operating Committee']['r']+$users['Operating Committee']['r'];?></td>
						<td><?php echo CHtml::link($guests['Operating Committee']['a']+$users['Operating Committee']['a'],array('report/attendedDownload','type'=>'Operating Committee'));?></td>
						<td><?php echo $guests['Operating Committee']['r']+$users['Operating Committee']['r']==0?'':$formatter->format('#,##0',($users['Operating Committee']['a'] +$guests['Operating Committee']['a']) * 100/($users['Operating Committee']['r']+$guests['Operating Committee']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Operating Committee']['r']+$users['Operating Committee']['r'] - ($guests['Operating Committee']['a']+$users['Operating Committee']['a']),array('report/noShowDownload','type'=>'Operating Committee'));?></td>
						<td><?php echo $guests['Operating Committee']['r']+$users['Operating Committee']['r']==0?'':$formatter->format('#,##0',($guests['Operating Committee']['r']+$users['Operating Committee']['r'] - ($users['Operating Committee']['a'] +$guests['Operating Committee']['a'])) * 100/($users['Operating Committee']['r']+$guests['Operating Committee']['r']));?>%</td>
						
					
					<tr>
						<td>TOTAL</td>
							<td><?php echo $users['Total']['r'];?></td>
						<td><?php echo $users['Total']['a'];?></td>
						<td><?php echo $users['Total']['r']==0?'':$formatter->format('#,##0',$users['Total']['a'] * 100/$users['Total']['r']);?>%</td>
						<td><?php echo $guests['Total']['r'];?></td>
						<td><?php echo $guests['Total']['a'];?></td>
						<td><?php echo $guests['Total']['r']==0?'':$formatter->format('#,##0',$guests['Total']['a'] * 100/$guests['Total']['r']);?>%</td>
						<td><?php echo $guests['Total']['r']+$users['Total']['r'];?></td>
						<td><?php echo CHtml::link($guests['Total']['a']+$users['Total']['a'],array('report/attendedDownload','type'=>'Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee'));?></td>
						<td><?php echo $guests['Total']['r']+$users['Total']['r']==0?'':$formatter->format('#,##0',($users['Total']['a'] +$guests['Total']['a']) * 100/($users['Total']['r']+$guests['Total']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Total']['r']+$users['Total']['r'] -($guests['Total']['a']+$users['Total']['a']) ,array('report/noShowDownload','type'=>'Top Achievers,Eagles,Winners,Host GVP,Host GEN,Operating Committee'));?></td>
						<td><?php echo $guests['Total']['r']+$users['Total']['r']==0?'':$formatter->format('#,##0',( $guests['Total']['r']+$users['Total']['r'] -($users['Total']['a'] +$guests['Total']['a'])) * 100/($users['Total']['r']+$guests['Total']['r']));?>%</td>
						
				</tbody>
			</table>
			<table id="table" class="table table-bordered table-hover table-striped">
				<caption>
				</caption>
				<thead>
					<tr>
						<th width="120px;">Category</th><th>Registered</th><th>Attended</th><th>Percent</th><th>Guest Registered</th><th>Gueest Attended</th><th>Percent</th><th>Total Registered</th><th>Total Attended</th><th>Percent</th><th>Total No-Show</th><th>Percent</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Gartner Crew</td>
						<td><?php echo $users['Gartner Crew']['r'];?></td>
						<td><?php echo $users['Gartner Crew']['a'];?></td>
						<td><?php echo $users['Gartner Crew']['r']==0?'':$formatter->format('#,##0',$users['Gartner Crew']['a'] * 100/$users['Gartner Crew']['r']);?>%</td>
						<td><?php echo $guests['Gartner Crew']['r'];?></td>
						<td><?php echo $guests['Gartner Crew']['a'];?></td>
						<td><?php echo $guests['Gartner Crew']['r']==0?'':($guests['Gartner Crew']['a'] * 100/$guests['Gartner Crew']['r']);?>%</td>
						<td><?php echo $guests['Gartner Crew']['r']+$users['Gartner Crew']['r'];?></td>
						<td><?php echo CHtml::link($guests['Gartner Crew']['a']+$users['Gartner Crew']['a'],array('report/attendedDownload','type'=>'Gartner Crew'));?></td>
						<td><?php echo $guests['Gartner Crew']['r']+$users['Gartner Crew']['r']==0?'':$formatter->format('#,##0',($users['Gartner Crew']['a'] +$guests['Gartner Crew']['a']) * 100/($users['Gartner Crew']['r']+$guests['Gartner Crew']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Gartner Crew']['r']+$users['Gartner Crew']['r']-($guests['Gartner Crew']['a']+$users['Gartner Crew']['a']),array('report/noShowDownload','type'=>'Gartner Crew'));?></td>
						<td><?php echo $guests['Gartner Crew']['r']+$users['Gartner Crew']['r']==0?'':$formatter->format('#,##0',($guests['Gartner Crew']['r']+$users['Gartner Crew']['r'] - ($users['Gartner Crew']['a'] +$guests['Gartner Crew']['a'])) * 100/($users['Gartner Crew']['r']+$guests['Gartner Crew']['r']));?>%</td>
						
					<tr>
						<td>Crew</td>
						<td><?php echo $users['Crew']['r'];?></td>
						<td><?php echo $users['Crew']['a'];?></td>
						<td><?php echo $users['Crew']['r']==0?'':$formatter->format('#,##0',$users['Crew']['a'] * 100/$users['Crew']['r']);?>%</td>
						<td><?php echo $guests['Crew']['r'];?></td>
						<td><?php echo $guests['Crew']['a'];?></td>
						<td><?php echo $guests['Crew']['r']==0?'':($guests['Crew']['a'] * 100/$guests['Crew']['r']);?>%</td>
						<td><?php echo $guests['Crew']['r']+$users['Crew']['r'];?></td>
						<td><?php echo CHtml::link($guests['Crew']['a']+$users['Crew']['a'],array('report/attendedDownload','type'=>'Crew'));?></td>
						<td><?php echo $guests['Crew']['r']+$users['Crew']['r']==0?'':$formatter->format('#,##0',($users['Crew']['a'] +$guests['Crew']['a']) * 100/($users['Crew']['r']+$guests['Crew']['r']));?>%</td>
						<td><?php echo CHtml::link($guests['Crew']['r']+$users['Crew']['r'] - ($guests['Crew']['a']+$users['Crew']['a']),array('report/noShowDownload','type'=>'Crew'));?></td>
						<td><?php echo $guests['Crew']['r']+$users['Crew']['r']==0?'':$formatter->format('#,##0',(($guests['Crew']['r']+$users['Crew']['r']) - ($users['Crew']['a'] +$guests['Crew']['a'])) * 100/($users['Crew']['r']+$guests['Crew']['r']));?>%</td>
			</tbody>
			</table>			
		</div>
	</div>
	
</div>
    
