<?php
/* @var $this ClssesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clsses',
);

$this->menu=array(
	array('label'=>'Create Clsses', 'url'=>array('create')),
	array('label'=>'Manage Clsses', 'url'=>array('admin')),
);
?>

<h1>Clsses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
