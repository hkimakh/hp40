<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->idstudents=>array('view','id'=>$model->idstudents),
	'Update',
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Create Students', 'url'=>array('create')),
	array('label'=>'View Students', 'url'=>array('view', 'id'=>$model->idstudents)),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
?>

<h1>Update Students <?php echo $model->idstudents; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>