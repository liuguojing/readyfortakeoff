<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M&S IT Away Day</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.css" rel="stylesheet">
    <!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/excite-bike/jquery-ui-1.8.23.custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-1.8.23.custom.min.js"></script>
</head>

  <body style="padding-bottom: 0px;">
	<div class="jumbotron subhead customer" id="overview">
		<div id="header">
		    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/mands_logo.jpg','M&S',array('style'=>'float:right;margin:72px 20px 0 0;'));?>
			<?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/logo_left.png','Ready For Take Off',array('style'=>'width:600px;margin:20px;'));?>
		</div>
	</div>
	<div id="body"  style="padding:40px;">
		<div id="div_box">
		<div class="container">
			<?php echo $content;?>
		</div>
		</div>
	</div>
  </body>
</html>
