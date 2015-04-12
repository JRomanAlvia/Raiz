<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'cultivo-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'longitud',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'latitud',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php 
        //echo $form->textFieldGroup($model,'fecha_inicio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); 
        ?>
<?php echo $form->datePickerGroup(
			$model,
			'fecha_inicio',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
					),
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => 'Click inside! This is a super cool date field.',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>

	<?php echo $form->textFieldGroup($model,'area_cultivo',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'tipo_medida',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'num_planta',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'cantidad_cosecha',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>9)))); ?>

	<?php echo $form->textFieldGroup($model,'estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php 
        //echo $form->textFieldGroup($model,'Usuarios_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<?php 
$dataUsuarios = CHtml::listData(Usuarios::model()->findAll(), 'id', 'nombre');
echo $form->dropDownListGroup(
			$model,
			'Usuarios_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataUsuarios,
					'htmlOptions' => array(),
				)
			)
		); ?>

	<?php 
        //echo $form->textFieldGroup($model,'Plantas_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
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

	<?php 
        //echo $form->textFieldGroup($model,'City_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); 
        ?>
<?php 
$dataCiudad = CHtml::listData(City::model()->findAll(), 'id', 'name');
echo $form->dropDownListGroup(
			$model,
			'City_id',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => $dataCiudad,
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
