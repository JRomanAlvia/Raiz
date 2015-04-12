<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Usuarios','url'=>array('index')),
array('label'=>'Create Usuarios','url'=>array('create')),
array('label'=>'Update Usuarios','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Usuarios','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Usuarios','url'=>array('admin')),
);
?>
  

<center><img class="img-responsive" alt="Responsive image" style="width: 100px;height: 100px;" src="http://cdn.flaticon.com/png/256/64379.png"/></center>
<h1>Usuario <?php echo $model->nombre; ?></h1><br/>

<?php $this->widget(
    'booster.widgets.TbButton',
    array(
        'label' => 'Agregar Cultivos',
        'context' => 'primary',
        'htmlOptions' => array(
            'data-toggle' => 'modal',
            'data-target' => '#myModal',
        ),
    )
);?>
<br/><br/>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'nick',
		'email',
		//'password',
		//'tipo',
		'nombre',
		'apellido',
),
)); ?>




<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Cultivos</h4>
    </div>
 
    <div class="modal-body">
       
        <?php
        echo $this->renderPartial('//cultivo/_form', array('model'=> $modeloCultivos ) );
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

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'cultivo-grid',
'dataProvider'=>$modeloCultivos->search(),
'filter'=>$modeloCultivos,
'columns'=>array(
		//'id',
		//'longitud',
		//'latitud',
		'fecha_inicio',
		'area_cultivo',
		//'tipo_medida',
		
		//'num_planta',
		'cantidad_cosecha',
		//'estado',
		//'Usuarios_id',
    array ('name'=>'Plantas_id','value'=>'$data->plantas->descripcion','type'=>'text',),
    array ('name'=>'City_id','value'=>'$data->city->name','type'=>'text',),
		//'Plantas_id',
		//'City_id',
		
array(
'class'=>'booster.widgets.TbButtonColumn',
    'template'=>'{view}', // botones a mostrar
                        'viewButtonUrl'=>'Yii::app()->createUrl("cultivo/view&id=$data->id")',
                        //'deleteButtonUrl'=>'Yii::app()->createUrl("tecnologiaEstablecimiento/delete&id=$data->id" )', // url de la acción 'delete'
                       // 'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
                        'afterDelete'=>'$.fn.yiiGridView.update("nombre-grid");',
),
),
)); ?>