<table border=0 width="852px" style="word-wrap:break-word;font-family:arial;">
<tr>
<td style="width:852px">
<div style="width:852px;word-wrap: break-word;font-family:arial;">
<img src="<?php echo $this->domain?>img/email_head.png" />
<p><b>Dear <?php echo $model->first_name;?></b></p>
<p style="word-wrap:break-word;font-family:arial;">We are delighted to confirm your accommodation for Winners Circle 2013 as follows:</p>

<p style="word-wrap:break-word;font-family:arial;">Fontainebleau Hotel<br/>
4441 Collins Avenue Sydney Beach<br/>
Florida <br/>
33140 <br/>
USA <br/>
</p>

<p style="word-wrap:break-word;font-family:arial;">Check in: <?php echo $model->hotel_arrival_date;?><br/>
Check out: <?php echo $model->hotel_departure_date;?><br/>
Reservation number: <?php echo $model->hotel_confirmation_number;?><br/>
</p>
<p style="word-wrap:break-word;font-family:arial;">Please do not hesitate to contact us if you have any queries regarding your reservation. </p>
<p style="word-wrap:break-word;font-family:arial;">We look forward to seeing you in Sydney,</p>
<p style="word-wrap:break-word;font-family:arial;">Kind Regards,</p>

<p style="word-wrap:break-word;font-family:arial;">The Winners Circle Registration Team</p>

<div style="clear:both"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>

</td>
</tr>
</table>