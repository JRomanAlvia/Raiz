<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Usuarios','url'=>array('index')),
array('label'=>'Create Usuarios','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('usuarios-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Usuarios</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'usuarios-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'nick',
		'email',
		'password',
		'tipo',
		'nombre',
		/*
		'apellido',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
