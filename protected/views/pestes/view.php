<?php
$this->breadcrumbs=array(
	'Pestes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Pestes','url'=>array('index')),
array('label'=>'Create Pestes','url'=>array('create')),
array('label'=>'Update Pestes','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pestes','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pestes','url'=>array('admin')),
);
?>

<h1>View Pestes #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nombre',
		'tipo_peste',
		'nombre_cientifico',
		'imagen',
		'estado',
),
)); ?>
