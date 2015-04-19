<?php
/* @var $this ClssesController */
/* @var $model Clsses */

$this->breadcrumbs=array(
	'Clsses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clsses', 'url'=>array('index')),
	array('label'=>'Manage Clsses', 'url'=>array('admin')),
);
?>

<h1>Create Clsses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>