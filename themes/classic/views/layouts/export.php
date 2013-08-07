<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<style>
		body{min-width:600px;}
		
table{
border: 1px solid #DDD;
border-collapse: separate;
border-left: 0;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
thead {
display: table-header-group;
vertical-align: middle;
border-color: inherit;
}
tr {
display: table-row;
vertical-align: inherit;
border-color: inherit;
}
th, td {
padding: 8px;
line-height: 20px;
text-align: left;
vertical-align: top;
border-top: 1px solid #DDD;
min-width:200px;
}
table
  {
  border-collapse:collapse;
  }

table, td, th
  {
  border:1px solid black;
  word-break:keep-all;
  white-space: nowrap;
  }
 td{height:20px;width:auto;}
	</style>
</head>

  <body>
	<div class="container">
		<?php echo $content;?>
	</div>
  </body>
</html>
