<?php
/* @var $this BikeDescriptionController */
/* @var $model BikeDescription */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bike-description-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_brand_bike'); ?>
		<?php echo $form->dropDownList($model,'id_brand_bike',  BrandBike::getList(),array('prompt'=>'Seleccione')); ?>
		<?php echo $form->error($model,'id_brand_bike'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_model_bike'); ?>
		<?php echo $form->dropDownList($model,'id_model_bike',ModelBike::getList(),array('prompt'=>'Seleccione')); ?>
		<?php echo $form->error($model,'id_model_bike'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_colour'); ?>
		<?php echo $form->dropDownList($model,'id_colour',  Colour::getList(),array('prompt'=>'Seleccione')); ?>
		<?php echo $form->error($model,'id_colour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plate'); ?>
		<?php echo $form->textField($model,'plate',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'plate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_bike'); ?>
		<?php echo $form->textField($model,'year_bike'); ?>
		<?php echo $form->error($model,'year_bike'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'info', 'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->