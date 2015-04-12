<?php
$this->breadcrumbs=array(
	'Pesticidases',
);

$this->menu=array(
array('label'=>'Create Pesticidas','url'=>array('create')),
array('label'=>'Manage Pesticidas','url'=>array('admin')),
);
?>

<h1>Pesticidases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
