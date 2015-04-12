<?php
$this->breadcrumbs=array(
	'Cultivos',
);

$this->menu=array(
array('label'=>'Create Cultivo','url'=>array('create')),
array('label'=>'Manage Cultivo','url'=>array('admin')),
);
?>

<h1>Cultivos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
