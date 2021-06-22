<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mark-points-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>100,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'shortname'); ?>
		<?php echo $form->textField($model,'shortname',array('size'=>9,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'shortname'); ?>
	</div>
       
        <div class="row">
		<?php echo $form->labelEx($model,'nets'); ?>
		<?php echo $form->dropDownList($model,'nets', Nets::allNew()); ?>
		<?php echo $form->error($model,'nets'); ?>
	</div>
       
        <div class="row">
		<?php echo $form->labelEx($model,'condsurv'); ?>
		<?php echo $form->dropDownList($model,'condsurv', ConditionsOfSurvey::allNew()); ?>
		<?php echo $form->error($model,'condsurv'); ?>
	</div>
  
        <div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->dropDownList($model,'country', Countries::allNew()); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'kroky'); ?>
		<?php echo $form->textField($model,'kroky',array('size'=>80,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kroky'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->