<?php
$this->breadcrumbs=array(
	'Plantas Pestes',
);

$this->menu=array(
array('label'=>'Create PlantasPestes','url'=>array('create')),
array('label'=>'Manage PlantasPestes','url'=>array('admin')),
);
?>

<h1>Plantas Pestes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
