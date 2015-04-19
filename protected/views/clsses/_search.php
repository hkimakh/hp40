<?php
/* @var $this ClssesController */
/* @var $model Clsses */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idclsses'); ?>
		<?php echo $form->textField($model,'idclsses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teacherID'); ?>
		<?php echo $form->textField($model,'teacherID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClassName'); ?>
		<?php echo $form->textField($model,'ClassName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->