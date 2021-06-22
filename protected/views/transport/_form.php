<?php
/* @var $this TransportController */
/* @var $model Transport */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transport-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_number'); ?>
		<?php echo $form->textField($model,'state_number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'state_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fuel_consumption'); ?>
		<?php echo $form->textField($model,'fuel_consumption'); ?>
		<?php echo $form->error($model,'fuel_consumption'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->