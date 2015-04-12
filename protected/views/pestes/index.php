<?php
$this->breadcrumbs=array(
	'Pestes',
);

$this->menu=array(
array('label'=>'Create Pestes','url'=>array('create')),
array('label'=>'Manage Pestes','url'=>array('admin')),
);
?>

<h1>Pestes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
