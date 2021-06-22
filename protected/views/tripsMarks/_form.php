<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trips-marks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_number'); ?>
		<?php echo $form->textField($model,'marker_number',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'marker_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_in_trip'); ?>
		<?php echo $form->textField($model,'number_in_trip'); ?>
		<?php echo $form->error($model,'number_in_trip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distance_from_previous_marker'); ?>
		<?php echo $form->textField($model,'distance_from_previous_marker'); ?>
		<?php echo $form->error($model,'distance_from_previous_marker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'measurement_start'); ?>
		<?php echo $form->textField($model,'measurement_start'); ?>
		<?php echo $form->error($model,'measurement_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'measurement_finish'); ?>
		<?php echo $form->textField($model,'measurement_finish'); ?>
		<?php echo $form->error($model,'measurement_finish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->