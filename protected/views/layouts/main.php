<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <link rel= "stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" /> 
    <link rel= "stylesheet" type="text/javaScript" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/header.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php
	//adding the jquery files 
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile($baseUrl.'/js/portlet.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.js');
	?>
		
</head>

<body>
  
<div class="container" id="page">

   <!--   <div id="header">
		 <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header --> 

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Users', 'url'=>array('/users/admin'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>!Yii::app()->user->isGuest ),
				array('label'=>'Contact', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->checkAccess('')),
				array('label'=>'Teachers', 'url'=>array('/teachers/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'user_menu')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'user_menu')),
			),
		)); ?>
		
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Delaware Taxi Cab.<br/>
		All Rights Reserved.<br/>
		<?php //echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
