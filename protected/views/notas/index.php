<?php
$this->breadcrumbs=array(
	'Notases',
);

$this->menu=array(
array('label'=>'Create Notas','url'=>array('create')),
array('label'=>'Manage Notas','url'=>array('admin')),
);
?>

<h1>Notases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
