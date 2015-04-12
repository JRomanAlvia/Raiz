<?php
$this->breadcrumbs=array(
	'Notases'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Notas','url'=>array('index')),
array('label'=>'Create Notas','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('notas-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Notas</h1>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'notas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'comentario',
		array ('name'=>'tablas_id','value'=>'$data->tablas->descripcion','type'=>'text',),

array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
