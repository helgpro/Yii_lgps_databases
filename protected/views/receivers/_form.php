<?php
/* @var $this ReceiversController */
/* @var $model Receivers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receivers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля <span class="required">*</span> обязательные.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'setI'); ?>
		<?php echo $form->textField($model,'setI',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'setI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'igs_code'); ?>
		<?php echo $form->textField($model,'igs_code',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'igs_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial_num'); ?>
		<?php echo $form->textField($model,'serial_num',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'serial_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->dropDownList($model,'id_user',array('oper'=>'oper','admin'=>'admin')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->