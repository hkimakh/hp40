<?php
/* @var $this ClssesController */
/* @var $model Clsses */

$this->breadcrumbs=array(
	'Clsses'=>array('index'),
	$model->idclsses=>array('view','id'=>$model->idclsses),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clsses', 'url'=>array('index')),
	array('label'=>'Create Clsses', 'url'=>array('create')),
	array('label'=>'View Clsses', 'url'=>array('view', 'id'=>$model->idclsses)),
	array('label'=>'Manage Clsses', 'url'=>array('admin')),
);
?>

<h1>Update Clsses <?php echo $model->idclsses; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>