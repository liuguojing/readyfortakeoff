<div class="row">
	<div class="span12" style="text-align:center">
		<h1>Registration <br/>M&S IT Away Day</h1>
		<h2><b>Date</b></h2>
		<div>1<sup>st</sup> October 2013</div>
		<h2>Venue</h2>
		<p>Central Hall Westminster<br/>
		Storey's Gate<br/>
		Westminster<br/>
		London SW1H 9NH</p>
		
		<?php echo CHtml::link('Click for map','#myModal',array('class'=>'link','data-toggle'=>"modal"))?>
		 
		<!-- Modal -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Map</h3>
		  </div>
		  <div class="modal-body">
		    <div id="map-canvas" style="height:400px;" class="map-container"></div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
		  </div>
		</div>
		
		<table class="table table-hover table-striped" style="width:80%;margin:auto;">
			<caption><h2>Timings</h2></caption>
			<tr>
				<td>Registration</td>
				<td>8:00</td>
			</tr>
			<tr>
				<td>Morning session</td>
				<td>09:00 – 12:00</td>
			</tr>
			<tr>
				<td>Lunch</td>
				<td>12:00 – 13:00</td>
			</tr>
			<tr>
				<td>Afternoon session</td>
				<td>13:00 – 17:00</td>
			</tr>
			<tr>
				<td>Drinks reception</td>
				<td>17:00 – 18:30</td>
			</tr>
		</table>
		<?php echo CHtml::link('Next',array('user/information'),array('class'=>'btn btn-large btn-success','style'=>'margin:20px;'));?>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
$(function() {
	var map;
	var latlng = new google.maps.LatLng(51.499947,-0.129693);
	function initialize() {
		
		var mapOptions = {
				zoom: 18,
		  		center: latlng,
		  		mapTypeId: google.maps.MapTypeId.ROADMAP
			};
		map = new google.maps.Map(document.getElementById('map-canvas'),
				mapOptions);
		var marker = new google.maps.Marker
		(
		    {
		        position: latlng,
		        map: map,
		        title: 'Click me'
		    }
		);
		var infowindow = new google.maps.InfoWindow({
	        content: 'Central Hall Westminster,Storey\'s Gate<br/>Westminster,London SW1H 9NH'
	    });
		google.maps.event.addListener(marker, 'click', function () {
	        // Calling the open method of the infoWindow 
	        infowindow.open(map, marker);
	    });
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	$('#myModal').on('shown', function () {
	    google.maps.event.trigger(map, "resize");
	    map.setCenter(latlng);
	});
});
</script>

