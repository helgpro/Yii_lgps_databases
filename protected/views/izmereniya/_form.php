<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'izmereniya-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_id'); ?>
		<?php echo $form->textField($model,'marker_id'); ?>
		<?php echo $form->error($model,'marker_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b_date'); ?>
		<?php echo $form->textField($model,'b_date'); ?>
		<?php echo $form->error($model,'b_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b_time'); ?>
		<?php echo $form->textField($model,'b_time'); ?>
		<?php echo $form->error($model,'b_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_date'); ?>
		<?php echo $form->textField($model,'e_date'); ?>
		<?php echo $form->error($model,'e_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_time'); ?>
		<?php echo $form->textField($model,'e_time'); ?>
		<?php echo $form->error($model,'e_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sample_rate'); ?>
		<?php echo $form->textField($model,'sample_rate'); ?>
		<?php echo $form->error($model,'sample_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_id'); ?>
		<?php echo $form->textField($model,'tour_id'); ?>
		<?php echo $form->error($model,'tour_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agency_id'); ?>
		<?php echo $form->textField($model,'agency_id'); ?>
		<?php echo $form->error($model,'agency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operator_id'); ?>
		<?php echo $form->textField($model,'operator_id'); ?>
		<?php echo $form->error($model,'operator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receiver_id'); ?>
		<?php echo $form->textField($model,'receiver_id'); ?>
		<?php echo $form->error($model,'receiver_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_id'); ?>
		<?php echo $form->textField($model,'antenna_id'); ?>
		<?php echo $form->error($model,'antenna_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_measurement'); ?>
		<?php echo $form->textField($model,'antenna_measurement'); ?>
		<?php echo $form->error($model,'antenna_measurement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_position_id'); ?>
		<?php echo $form->textField($model,'antenna_position_id'); ?>
		<?php echo $form->error($model,'antenna_position_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_dh'); ?>
		<?php echo $form->textField($model,'antenna_dh'); ?>
		<?php echo $form->error($model,'antenna_dh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sours_data'); ?>
		<?php echo $form->textArea($model,'sours_data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sours_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value_size'); ?>
		<?php echo $form->textArea($model,'value_size',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'value_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'support_data'); ?>
		<?php echo $form->textArea($model,'support_data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'support_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rinex_file'); ?>
		<?php echo $form->textField($model,'rinex_file',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rinex_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apriori_x'); ?>
		<?php echo $form->textField($model,'apriori_x'); ?>
		<?php echo $form->error($model,'apriori_x'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apriori_y'); ?>
		<?php echo $form->textField($model,'apriori_y'); ?>
		<?php echo $form->error($model,'apriori_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apriori_z'); ?>
		<?php echo $form->textField($model,'apriori_z'); ?>
		<?php echo $form->error($model,'apriori_z'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weather'); ?>
		<?php echo $form->textArea($model,'weather',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'weather'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
		<?php echo $form->error($model,'status_id'); ?>
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