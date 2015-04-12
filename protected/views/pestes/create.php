<?php
$this->breadcrumbs=array(
	'Pestes'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pestes','url'=>array('index')),
array('label'=>'Manage Pestes','url'=>array('admin')),
);
?>

<h1>Crear Pestes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>