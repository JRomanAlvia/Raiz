<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Plantas_id')); ?>:</b>
	<?php echo CHtml::encode($data->Plantas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pestes_id')); ?>:</b>
	<?php echo CHtml::encode($data->Pestes_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pesticidas_id')); ?>:</b>
	<?php echo CHtml::encode($data->Pesticidas_id); ?>
	<br />


</div>