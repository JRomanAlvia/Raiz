<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_cientifica')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_cientifica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo_cocecha')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo_cocecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epoca_anio')); ?>:</b>
	<?php echo CHtml::encode($data->epoca_anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('padre_id')); ?>:</b>
	<?php echo CHtml::encode($data->padre_id); ?>
	<br />


</div>