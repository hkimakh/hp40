
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

<?php /*
echo "<pre>";
//print_r ($model[0]->Lastname);
print_r($model);
echo "</pre>";
 exit();*/
?>
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

  
 

   
   
   
   
