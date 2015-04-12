<?php
$this->breadcrumbs=array(
	'Tablases'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Tablas','url'=>array('index')),
array('label'=>'Manage Tablas','url'=>array('admin')),
);
?>

<h1>Crear Tablas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>