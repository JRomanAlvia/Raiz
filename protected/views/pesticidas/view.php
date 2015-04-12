<?php
$this->breadcrumbs=array(
	'Pesticidases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Pesticidas','url'=>array('index')),
array('label'=>'Create Pesticidas','url'=>array('create')),
array('label'=>'Update Pesticidas','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pesticidas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pesticidas','url'=>array('admin')),
);
?>

<h1>View Pesticidas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descripcion',
		'descripcion_formula',
		'tipo_pesticidas',
),
)); ?>
