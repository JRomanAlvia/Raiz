<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'plantas-pestes-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php 
        //echo $form->textFieldGroup($model,'Plantas_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<div class="hidden">
<?php 

$dataPlantas = CHtml::listData(Plantas::model()->findAll(), 'id', 'descripcion');
echo $form->dropDownListGroup(
			$model,
			'Plantas_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataPlantas,
					'htmlOptions' => array(),
				)
			)
		); ?>
</div>
	<?php 
        //echo $form->textFieldGroup($model,'Pestes_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<?php 
$dataPestes = CHtml::listData(Pestes::model()->findAll(), 'id', 'nombre_cientifico');
echo $form->dropDownListGroup(
			$model,
			'Pestes_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataPestes,
					'htmlOptions' => array(),
				)
			)
		); ?>

	<?php 
        //echo $form->textFieldGroup($model,'Pesticidas_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<?php 
$dataPesticidas = CHtml::listData(Pesticidas::model()->findAll(), 'id', 'descripcion');
echo $form->dropDownListGroup(
			$model,
			'Pesticidas_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataPesticidas,
					'htmlOptions' => array(),
				)
			)
		); ?>
<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
