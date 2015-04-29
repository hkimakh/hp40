<?php
/* @var $this TeachersController */
/* @var $model Teachers */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->idteachers=>array('view','id'=>$model->idteachers),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teachers', 'url'=>array('index')),
	array('label'=>'Create Teachers', 'url'=>array('create')),
	array('label'=>'View Teachers', 'url'=>array('view', 'id'=>$model->idteachers)),
	array('label'=>'Manage Teachers', 'url'=>array('admin')),
	array('label'=>'Test', 'url'=>array('test')),
		
);
?>

<h1>Update Teachers <?php echo $model->Firstname; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>