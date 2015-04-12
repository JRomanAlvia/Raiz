<?php
$this->breadcrumbs=array(
	'Notases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Notas','url'=>array('index')),
array('label'=>'Create Notas','url'=>array('create')),
array('label'=>'Update Notas','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Notas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Notas','url'=>array('admin')),
);
?>

<h1>View Notas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'comentario',
		array ('name'=>'tablas_id','value'=>$model->tablas->descripcion,'type'=>'text',),

),
)); ?>
