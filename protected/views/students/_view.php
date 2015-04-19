<?php
/* @var $this StudentsController */
/* @var $data Students */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstudents')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstudents), array('view', 'id'=>$data->idstudents)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fistname')); ?>:</b>
	<?php echo CHtml::encode($data->Fistname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />


</div>