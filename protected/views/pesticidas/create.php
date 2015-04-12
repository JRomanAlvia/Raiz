<?php
$this->breadcrumbs=array(
	'Pesticidases'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pesticidas','url'=>array('index')),
array('label'=>'Manage Pesticidas','url'=>array('admin')),
);
?>

<h1>Crear Pesticidas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>