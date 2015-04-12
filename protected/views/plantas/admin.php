<?php
$this->breadcrumbs=array(
	'Plantases'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Plantas','url'=>array('index')),
array('label'=>'Create Plantas','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('plantas-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Plantas</h1>


<center><img class="img-responsive" alt="Responsive image" style="width: 100px;height: 100px;" src="http://cdn.flaticon.com/png/256/31745.png"/></center>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'plantas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'descripcion',
		'descripcion_cientifica',
		'tiempo_cocecha',
		'epoca_anio',
		'imagen',
		/*
		'padre_id',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
