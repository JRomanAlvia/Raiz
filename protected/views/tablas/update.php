<?php
$this->breadcrumbs=array(
	'Tablases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Tablas','url'=>array('index')),
	array('label'=>'Create Tablas','url'=>array('create')),
	array('label'=>'View Tablas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tablas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Tablas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>