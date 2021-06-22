<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */
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
		<?php echo $form->label($model,'markerName_id'); ?>
                 <?php echo $form->dropDownList($model,'markerName_id',MarkNams::all(),array('empty'=>'')) ?>

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
		<?php echo $form->dropDownList($model,'tour_id',  Tours::all(),array('empty'=>'')) ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agency_id'); ?>
		<?php echo $form->dropDownList($model,'agency_id', Agencies::all(),array('empty'=>'')) ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operator_id'); ?>
		<?php echo $form->dropDownList($model,'operator_id', Operators::all(),array('empty'=>'')) ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receiver_id'); ?>
		<?php echo $form->dropDownList($model,'receiver_id', Receivers::all(),array('empty'=>'')) ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_id'); ?>
		<?php echo $form->dropDownList($model,'antenna_id', Antennas::all(),array('empty'=>'')) ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antenna_measurement'); ?>
		<?php echo $form->textField($model,'antenna_measurement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antennaPosition'); ?>
		<?php echo $form->textField($model,'antennaPosition'); ?>
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
		<?php echo $form->dropDownList($model,'status_id', MeasurStatuses::all(),array('empty'=>'')) ?>
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