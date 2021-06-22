<?php
/* @var $this MarkersDistancesController */
/* @var $model MarkersDistances */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'markers-distances-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_marker_number'); ?>
		<?php echo $form->textArea($model,'first_marker_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'first_marker_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_marker_number'); ?>
		<?php echo $form->textArea($model,'second_marker_number',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'second_marker_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distance'); ?>
		<?php echo $form->textField($model,'distance'); ?>
		<?php echo $form->error($model,'distance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->