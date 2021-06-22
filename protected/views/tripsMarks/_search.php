<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marker_number'); ?>
		<?php echo $form->textField($model,'marker_number',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_in_trip'); ?>
		<?php echo $form->textField($model,'number_in_trip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distance_from_previous_marker'); ?>
		<?php echo $form->textField($model,'distance_from_previous_marker'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'measurement_start'); ?>
		<?php echo $form->textField($model,'measurement_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'measurement_finish'); ?>
		<?php echo $form->textField($model,'measurement_finish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->