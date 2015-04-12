<?php
$this->breadcrumbs=array(
	'Pestes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Pestes','url'=>array('index')),
	array('label'=>'Create Pestes','url'=>array('create')),
	array('label'=>'View Pestes','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Pestes','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Pestes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>