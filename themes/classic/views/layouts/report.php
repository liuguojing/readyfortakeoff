<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GARTNER WINNERS CIRCLE 2013</title>
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
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-button.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-1.8.23.custom.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.hotkeys.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap-wysiwyg.js"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/js/google-code-prettify/prettify.css" rel="stylesheet">
    <style>
	.btn-primary{
		color: #ffffff;
		  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
		  background-color:#388cbb
		  *background-color: #388cbb;
		  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#2aabe2), to(#388cbb));
		  background-image: -webkit-linear-gradient(top, #2aabe2, #388cbb);
		  background-image: -o-linear-gradient(top, #2aabe2, #388cbb);
		  background-image: linear-gradient(to bottom, #2aabe2, #388cbb);
		  background-image: -moz-linear-gradient(top, #2aabe2, #388cbb);
		  background-repeat: repeat-x;
		  border-color: #0044cc #0044cc #002a80;
		  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
		  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
	}
	.grid-view .button-column{
		width:120px;
	}
	
	</style>
</head>

  <body style="padding-bottom: 0px;">
	<div class="jumbotron subhead customer" id="overview">
		<div id="header">
		    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/mands_logo.jpg','M&S',array('style'=>'float:right;margin:72px 20px 0 0;'));?>
			<?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/logo_left.png','Ready For Take Off',array('style'=>'width:600px;margin:20px;'));?>
		</div>
	</div>
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<?php $controller = Yii::app()->getController()->id;?>
				<li<?php if($controller == 'report'){echo ' class="active"';}?>><?php echo CHtml::link('Home',array('report/index'));?></li>
				<li<?php if($controller == 'user'){echo ' class="active"';}?>><?php echo CHtml::link('User',array('user/admin'));?></li>
			</ul>
		</div>
	</div>
	<div class="cl"></div>
	<div id="body"  style="padding:40px;">
		<div id="div_box">
			<div class="container">
				<?php echo $content;?>
			</div>
		</div>
	</div>

  </body>
</html>
