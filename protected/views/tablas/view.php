<?php
$this->breadcrumbs=array(
	'Tablases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Tablas','url'=>array('index')),
array('label'=>'Create Tablas','url'=>array('create')),
array('label'=>'Update Tablas','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Tablas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Tablas','url'=>array('admin')),
);
?>

<h1>View Tablas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
),
)); ?>
