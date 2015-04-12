<?php
$this->breadcrumbs=array(
	'Plantases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Plantas','url'=>array('index')),
	array('label'=>'Create Plantas','url'=>array('create')),
	array('label'=>'View Plantas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Plantas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Plantas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>