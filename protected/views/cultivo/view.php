<?php
$this->breadcrumbs=array(
	'Cultivos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Cultivo','url'=>array('index')),
array('label'=>'Create Cultivo','url'=>array('create')),
array('label'=>'Update Cultivo','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Cultivo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Cultivo','url'=>array('admin')),
);
?>

<h1>Ver Cultivo #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'longitud',
		'latitud',
		'fecha_inicio',
		'area_cultivo',
		//'tipo_medida',
		'num_planta',
		'cantidad_cosecha',
		'estado',
		//'Usuarios_id',
    array ('name'=>'Plantas_id','value'=>$model->plantas->descripcion,'type'=>'text',),
    array ('name'=>'City_id','value'=>$model->city->name,'type'=>'text',),

		//'Plantas_id',
		'City_id',
),
)); ?>


<?php
//
// ext is your protected.extensions folder
// gmaps means the subfolder name under your protected.extensions folder
//  
Yii::import('ext.gmap.*');
 
$gMap = new EGMap();
$gMap->zoom = 10;
$gMap->setWidth(700);
// it can also be called $gMap->height = 400;
$gMap->setHeight(500);
$mapTypeControlOptions = array(
  'position'=> EGMapControlPosition::LEFT_BOTTOM,
  'style'=>EGMap::MAPTYPECONTROL_STYLE_DROPDOWN_MENU
);
 
$gMap->mapTypeControlOptions= $mapTypeControlOptions;
 
$gMap->setCenter(-0.184306,-78.485116);
 
// Create GMapInfoWindows
$info_window_a = new EGMapInfoWindow('<div>Cultivo Registrado</div>');
$info_window_b = new EGMapInfoWindow('Cultivo Registrado');
 
$icon = new EGMapMarkerImage(Yii::app()->baseUrl.'../images/icon.png');
 
$icon->setSize(62, 67);
$icon->setAnchor(86, 86.5);
$icon->setOrigin(0, 0);
 
// Create marker
$marker = new EGMapMarker(-0.184306, -78.485116, array('title' => 'Cultivo','icon'=>$icon));
$marker->addHtmlInfoWindow($info_window_a);
$gMap->addMarker($marker);
 
// Create marker with label
$marker = new EGMapMarkerWithLabel(39.821089311812094, 2.90165944519042, array('title' => 'Marker With Label'));
 
$label_options = array(
  'backgroundColor'=>'yellow',
  'opacity'=>'0.75',
  'width'=>'100px',
  'color'=>'blue'
);
 
/*
// Two ways of setting options
// ONE WAY:
$marker_options = array(
  'labelContent'=>'$9393K',
  'labelStyle'=>$label_options,
  'draggable'=>true,
  // check the style ID 
  // afterwards!!!
  'labelClass'=>'labels',
  'labelAnchor'=>new EGMapPoint(22,2),
  'raiseOnDrag'=>true
);
 
$marker->setOptions($marker_options);
*/
 
// SECOND WAY:
$marker->labelContent= '$425K';
$marker->labelStyle=$label_options;
$marker->draggable=true;
$marker->labelClass='labels';
$marker->raiseOnDrag= true;
 
$marker->setLabelAnchor(new EGMapPoint(22,0));
 
$marker->addHtmlInfoWindow($info_window_b);
 
$gMap->addMarker($marker);
 
// enabling marker clusterer just for fun
// to view it zoom-out the map
$gMap->enableMarkerClusterer(new EGMapMarkerClusterer());
 
$gMap->renderMap();
?>
<style type="text/css">
.labels {
   color: red;
   background-color: white;
   font-family: "Lucida Grande", "Arial", sans-serif;
   font-size: 10px;
   font-weight: bold;
   text-align: center;
   width: 40px;     
   border: 2px solid black;
   white-space: nowrap;
}
</style>