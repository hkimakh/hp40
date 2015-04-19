<style>
<!--
   table, th, td{
      border: 1px solid black;
      border-collapse: collapse;
   }
 th, td{
   padding: 5px;
 } 
 th{
   background-color:#FFF8DC;
 } 
.title_disigen{
   color:#00008B;
   text-decoration: underline;
 }
-->
</style>


<?php 
  echo "<pre>";
  print_r($model);
  echo "</pre>";
  echo exit();	


?>


<?php
/* @var $this TeachersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teachers',
);

$this->menu=array(
	array('label'=>'Create Teachers', 'url'=>array('create')),
	array('label'=>'Manage Teachers', 'url'=>array('admin')),
	array('label'=>'Test', 'url'=>array('test')),
		
);
?>

<h3 class="title_disigen">Teachers List</h3>
  name: <?php echo $this->name(3); ?>

<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<table >
  <tr>
     <th>ID</th>
     <th>Firstname</th>
     <th>Lastname</th>  
  </tr>
  <?php foreach ($model as $value):?>
    <tr>
      <td><?php echo $value->idteachers; ?></td>
      <td><?php echo $value->Firstname;?></td>
      <td><?php echo $value->Lastname;?></td>
    </tr>  
  <?php endforeach;?>
</table>