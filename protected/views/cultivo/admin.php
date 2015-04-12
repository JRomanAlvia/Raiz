<?php
$this->breadcrumbs=array(
	'Cultivos'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Cultivo','url'=>array('index')),
array('label'=>'Create Cultivo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('cultivo-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Cultivos</h1>



<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'cultivo-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'longitud',
		'latitud',
		'fecha_inicio',
		'area_cultivo',
		'tipo_medida',
		/*
		'num_planta',
		'cantidad_cosecha',
		'estado',
		'Usuarios_id',
		'Plantas_id',
		'City_id',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
