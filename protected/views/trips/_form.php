<?php
/* @var $this TripsController */
/* @var $model Trips */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trips-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_name'); ?>
		<?php echo $form->textField($model,'tour_name',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'tour_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operator_id'); ?>
		<?php echo $form->textField($model,'operator_id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'operator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'driver_id'); ?>
		<?php echo $form->textField($model,'driver_id'); ?>
		<?php echo $form->error($model,'driver_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transport_id'); ?>
		<?php echo $form->textField($model,'transport_id'); ?>
		<?php echo $form->error($model,'transport_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_out'); ?>
		<?php echo $form->textField($model,'check_out'); ?>
		<?php echo $form->error($model,'check_out'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->