<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'measurement_id'); ?>
		<?php echo $form->textField($model,'measurement_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marker_id'); ?>
		<?php echo $form->textField($model,'marker_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'b_date'); ?>
		<?php echo $form->textField($model,'b_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'b_time'); ?>
		<?php echo $form->textField($model,'b_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_date'); ?>
		<?php echo $form->textField($model,'e_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_time'); ?>
		<?php echo $form->textField($model,'e_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sample_rate'); ?>
		<?php echo $form->textField($model,'sample_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tour_id'); ?>
		<?php echo $form->textField($model,'tour_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agency_id'); ?>
		<?php echo $form->textField($model,'agency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operator_id'); ?>
		<?php echo $form->textField($model,'operator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receiver_id'); ?>
		<?php echo $form->textField($model,'receiver_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_id'); ?>
		<?php echo $form->textField($model,'antenna_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_measurement'); ?>
		<?php echo $form->textField($model,'antenna_measurement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_position_id'); ?>
		<?php echo $form->textField($model,'antenna_position_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_dh'); ?>
		<?php echo $form->textField($model,'antenna_dh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sours_data'); ?>
		<?php echo $form->textArea($model,'sours_data',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value_size'); ?>
		<?php echo $form->textArea($model,'value_size',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'support_data'); ?>
		<?php echo $form->textArea($model,'support_data',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rinex_file'); ?>
		<?php echo $form->textField($model,'rinex_file',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apriori_x'); ?>
		<?php echo $form->textField($model,'apriori_x'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apriori_y'); ?>
		<?php echo $form->textField($model,'apriori_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apriori_z'); ?>
		<?php echo $form->textField($model,'apriori_z'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weather'); ?>
		<?php echo $form->textArea($model,'weather',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->