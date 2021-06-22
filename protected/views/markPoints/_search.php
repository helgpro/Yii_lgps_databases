<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>80,'maxlength'=>100)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'shortname'); ?>
		<?php echo $form->textField($model,'shortname',array('size'=>6,'maxlength'=>4)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'nets'); ?>
		<?php echo $form->textField($model,'nets',array('size'=>6,'maxlength'=>4)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'condsurv'); ?>
		<?php echo $form->textField($model,'condsurv',array('size'=>3,'maxlength'=>3)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>20,'maxlength'=>20)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'kroky'); ?>
		<?php echo $form->textField($model,'kroky',array('size'=>80,'maxlength'=>90)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
	</div>
   
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->