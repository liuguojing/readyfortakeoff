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