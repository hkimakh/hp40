<?php 


foreach ($data as $value){	
      echo"<h6>Firstname: " . $value->Firstname . "</h6>";
     //echo"<h6>Firstname: " . $value->Lastname . "</h6>";
      echo "<ul>";
      foreach ($value->clsses as $class){
      	echo "<li>" . $class->ClassName . "</li>";
      }
      echo"</ul>";
}

 //echo $data[0]->clsses[0]->ClassName;
 exit();

?>

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
  name: <?php echo $this->name(4); ?>

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
<?php 
 //echo"<pre>";
//echo $model[0]->Firstname;
 //echo exit();

?>