<?php
/* @var $this TeachersController */
/* @var $data Teachers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idteachers')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idteachers), array('view', 'id'=>$data->idteachers)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Firstname')); ?>:</b>
	<?php echo CHtml::encode($data->Firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lastname')); ?>:</b>
	<?php echo CHtml::encode($data->Lastname); ?>
	<br />

</div>