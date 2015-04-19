<?php
/* @var $this ClssesController */
/* @var $model Clsses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clsses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teacherID'); ?>
		<?php echo $form->textField($model,'teacherID'); ?>
		<?php echo $form->error($model,'teacherID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClassName'); ?>
		<?php echo $form->textField($model,'ClassName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ClassName'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->