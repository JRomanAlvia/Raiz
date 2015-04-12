<?php
$this->breadcrumbs=array(
	'Tablases',
);

$this->menu=array(
array('label'=>'Create Tablas','url'=>array('create')),
array('label'=>'Manage Tablas','url'=>array('admin')),
);
?>

<h1>Tablases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
