<?php
$this->breadcrumbs=array(
	'Plantases'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Plantas','url'=>array('index')),
array('label'=>'Manage Plantas','url'=>array('admin')),
);
?>

<h1>Crear Plantas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>