<?php
$this->breadcrumbs=array(
	'Plantas Pestes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PlantasPestes','url'=>array('index')),
array('label'=>'Manage PlantasPestes','url'=>array('admin')),
);
?>

<h1>Crear PlantasPestes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>