<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
	<?php echo CHtml::encode($data->longitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_cultivo')); ?>:</b>
	<?php echo CHtml::encode($data->area_cultivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_medida')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_medida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_planta')); ?>:</b>
	<?php echo CHtml::encode($data->num_planta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_cosecha')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_cosecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuarios_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuarios_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Plantas_id')); ?>:</b>
	<?php echo CHtml::encode($data->Plantas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('City_id')); ?>:</b>
	<?php echo CHtml::encode($data->City_id); ?>
	<br />

	*/ ?>

</div>