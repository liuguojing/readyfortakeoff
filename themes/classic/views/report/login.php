<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>M&S IT Away Day Reporting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/excite-bike/jquery-ui-1.8.23.custom.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl;?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
</head>
  <body>
	<header class="jumbotron subhead customer" id="overview">
	<div class="jumbotron subhead customer" id="overview">
		<div id="header">
		    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/mands_logo.jpg','M&S',array('style'=>'float:right;margin:72px 20px 0 0;'));?>
			<?php echo CHtml::image(Yii::app()->request->baseUrl . '/img/logo_left.png','Ready For Take Off',array('style'=>'width:600px;margin:20px;'));?>
		</div>
	</div>
	</header>
	<div class="container top">
		<div class="row">
			<div class="span12">
				<h1>Reporting Log-in</h1>
				<p>
					<?php 
					
					foreach(Yii::app()->user->getFlashes() as $key => $message) {
						echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
					}
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span3" style="margin-top:10px;">
					<span>Enter your name and password:</span>
					<form method="post">
					<input type="text" value="" name="Admin[role]" placeholder="username">
					<input type="password" name="Admin[password]" placeholder="password"/>
					<input type="submit" class="btn" value='Enter'/>
					</form>
			</div>
		</div>
	</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

  </body>
</html>
