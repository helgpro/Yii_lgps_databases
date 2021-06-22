<?php
/* @var $this PointsController */
/* @var $model Points */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'points-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_site'); ?>
		<?php echo $form->textField($model,'marker_site',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'marker_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_name'); ?>
		<?php echo $form->textField($model,'marker_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'marker_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'net_number'); ?>
		<?php echo $form->textField($model,'net_number',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'net_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point_marks'); ?>
		<?php echo $form->textArea($model,'point_marks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'point_marks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_of_installation'); ?>
		<?php echo $form->textField($model,'year_of_installation',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year_of_installation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year_of_destruction'); ?>
		<?php echo $form->textField($model,'year_of_destruction',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year_of_destruction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_ground'); ?>
		<?php echo $form->textArea($model,'type_of_ground',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'type_of_ground'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_foundation'); ?>
		<?php echo $form->textArea($model,'type_of_foundation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'type_of_foundation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_fastening'); ?>
		<?php echo $form->textArea($model,'type_of_fastening',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'type_of_fastening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditions_of_survey'); ?>
		<?php echo $form->textField($model,'conditions_of_survey',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'conditions_of_survey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude_e'); ?>
		<?php echo $form->textField($model,'longitude_e'); ?>
		<?php echo $form->error($model,'longitude_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude_n'); ?>
		<?php echo $form->textField($model,'latitude_n'); ?>
		<?php echo $form->error($model,'latitude_n'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altitude_h'); ?>
		<?php echo $form->textField($model,'altitude_h'); ?>
		<?php echo $form->error($model,'altitude_h'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kroki'); ?>
		<?php echo $form->textField($model,'kroki',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kroki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b_date'); ?>
		<?php echo $form->textField($model,'b_date'); ?>
		<?php echo $form->error($model,'b_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_date'); ?>
		<?php echo $form->textField($model,'e_date'); ?>
		<?php echo $form->error($model,'e_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->