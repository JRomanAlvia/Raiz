<?php
$this->breadcrumbs=array(
	'Cultivos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Cultivo','url'=>array('index')),
array('label'=>'Manage Cultivo','url'=>array('admin')),
);
?>

<h1>Crear Cultivo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>