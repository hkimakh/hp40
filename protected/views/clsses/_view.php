<?php
/* @var $this ClssesController */
/* @var $data Clsses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclsses')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclsses), array('view', 'id'=>$data->idclsses)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacherID')); ?>:</b>
	<?php echo CHtml::encode($data->teacherID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClassName')); ?>:</b>
	<?php echo CHtml::encode($data->ClassName); ?>
	<br />


</div>