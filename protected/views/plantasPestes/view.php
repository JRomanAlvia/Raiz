<?php
$this->breadcrumbs=array(
	'Plantas Pestes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List PlantasPestes','url'=>array('index')),
array('label'=>'Create PlantasPestes','url'=>array('create')),
array('label'=>'Update PlantasPestes','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete PlantasPestes','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PlantasPestes','url'=>array('admin')),
);
?>

<h1>View PlantasPestes #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'Plantas_id',
		'Pestes_id',
		'Pesticidas_id',
),
)); ?>


