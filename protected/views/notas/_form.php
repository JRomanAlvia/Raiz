<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'notas-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'comentario',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php 
       // echo $form->textFieldGroup($model,'tablas_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<?php 
$dataTablas = CHtml::listData(Tablas::model()->findAll(), 'id', 'descripcion');
echo $form->dropDownListGroup(
			$model,
			'tablas_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataTablas,
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
