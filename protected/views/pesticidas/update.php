<?php
$this->breadcrumbs=array(
	'Pesticidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Pesticidas','url'=>array('index')),
	array('label'=>'Create Pesticidas','url'=>array('create')),
	array('label'=>'View Pesticidas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Pesticidas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Pesticidas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>