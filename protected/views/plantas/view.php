<?php
$this->breadcrumbs=array(
	'Plantases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Plantas','url'=>array('index')),
array('label'=>'Create Plantas','url'=>array('create')),
array('label'=>'Update Plantas','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Plantas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Plantas','url'=>array('admin')),
);
?>

<h1>Info Planta #<?php echo $model->id; ?></h1><br/>
<?php $this->widget(
    'booster.widgets.TbButton',
    array(
        'label' => 'Agregar Peste',
        'context' => 'primary',
        'htmlOptions' => array(
            'data-toggle' => 'modal',
            'data-target' => '#myModal',
        ),
    )
);?>
<br/><br/><br/>
<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'descripcion',
		'descripcion_cientifica',
		'tiempo_cocecha',
		'epoca_anio',
		//'imagen',
		//'padre_id',
),
)); ?>




<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Pestes y Pesticidas</h4>
    </div>
 
    <div class="modal-body">
       
        <?php
        echo $this->renderPartial('//plantasPestes/_form', array('model'=> $modeloPlantasPestes ) );
        ?>
        
    </div>
 
    <div class="modal-footer">
     
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'label' => 'Close',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php $this->endWidget(); ?>

<?php 
$this->widget('booster.widgets.TbGridView',array(
'id'=>'plantas-pestes-grid',
'dataProvider'=>$modeloPlantasPestes->search(),
'filter'=>$modeloPlantasPestes,
'columns'=>array(
		
		
    array ('name'=>'Pestes_id','value'=>'$data->pestes->nombre_cientifico','type'=>'text',),
    array ('name'=>'Pesticidas_id','value'=>'$data->pesticidas->descripcion','type'=>'text',),

		
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); 
 
?>
 