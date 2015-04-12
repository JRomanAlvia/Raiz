<?php
$this->breadcrumbs=array(
	'Pesticidases'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Pesticidas','url'=>array('index')),
array('label'=>'Create Pesticidas','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pesticidas-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<center><img class="img-responsive" alt="Responsive image" style="width: 100px;height: 100px;" src="http://cdn.flaticon.com/png/256/71266.png"/></center>
<h1>Administrar Pesticidas</h1>


<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'pesticidas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'descripcion',
		'descripcion_formula',
		'tipo_pesticidas',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
