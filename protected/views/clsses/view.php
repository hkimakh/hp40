<?php
/* @var $this ClssesController */
/* @var $model Clsses */

$this->breadcrumbs=array(
	'Clsses'=>array('index'),
	$model->idclsses,
);

$this->menu=array(
	array('label'=>'List Clsses', 'url'=>array('index')),
	array('label'=>'Create Clsses', 'url'=>array('create')),
	array('label'=>'Update Clsses', 'url'=>array('update', 'id'=>$model->idclsses)),
	array('label'=>'Delete Clsses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idclsses),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clsses', 'url'=>array('admin')),
);
?>

<h1>View Clsses #<?php echo $model->idclsses; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idclsses',
		'studentID',
		'teacherID',
		'ClassName',
	),
)); ?>
