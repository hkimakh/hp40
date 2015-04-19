<?php
/* @var $this SiteController */

 $this->pageTitle=Yii::app()->name; 
 
?>
<?php $this->redirect(Yii::app()->createUrl('users/admin'));?>

<h1>Welcome to  <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

  <div class= "btn">
    <?php /*
      $this->widget('zii.widgets.jui.CJuiButton', array(
      	'buttonType'=>'link',
      	'name'=>'users',	
      	'caption'=>'users',
      	'options'=>array('icons' => 'js:{secondary: "ui-icon-extlink"}'),
      	'url' =>array('users/admin'),
      	//'options'=>array('disabled' =>$disabled),
      	"htmlOptions" => array('tabindex' => 500)						  		
      ));*/
    ?>
  </div>

<!--<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul> -->

