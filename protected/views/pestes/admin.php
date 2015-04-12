<?php
$this->breadcrumbs=array(
	'Pestes'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Pestes','url'=>array('index')),
array('label'=>'Create Pestes','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pestes-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<center><img class="img-responsive" alt="Responsive image" style="width: 100px;height: 100px;" src="http://cdn.flaticon.com/png/256/31745.png"/></center>
<h1>Administrar Pestes</h1>



<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'pestes-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'nombre',
		'tipo_peste',
		'nombre_cientifico',
		//'imagen',
		'estado',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
