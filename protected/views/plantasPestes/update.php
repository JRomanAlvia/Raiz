<?php
$this->breadcrumbs=array(
	'Plantas Pestes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PlantasPestes','url'=>array('index')),
	array('label'=>'Create PlantasPestes','url'=>array('create')),
	array('label'=>'View PlantasPestes','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PlantasPestes','url'=>array('admin')),
	);
	?>

	<h1>Actualizar PlantasPestes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>