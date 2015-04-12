<?php
$this->breadcrumbs=array(
	'Cultivos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Cultivo','url'=>array('index')),
	array('label'=>'Create Cultivo','url'=>array('create')),
	array('label'=>'View Cultivo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Cultivo','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Cultivo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>