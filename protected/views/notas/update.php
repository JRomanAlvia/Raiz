<?php
$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Notas','url'=>array('index')),
	array('label'=>'Create Notas','url'=>array('create')),
	array('label'=>'View Notas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Notas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Notas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>