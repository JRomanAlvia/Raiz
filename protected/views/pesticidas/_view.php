<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_formula')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_formula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_pesticidas')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_pesticidas); ?>
	<br />


</div>