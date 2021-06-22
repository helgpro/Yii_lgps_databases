<?php
/* @var $this MarkController */
/* @var $model Mark */
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
		<?php echo $form->label($model,'marker_id'); ?>
		<?php echo $form->textField($model,'marker_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'points_id'); ?>
		<?php echo $form->textField($model,'points_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'net_id'); ?>
		<?php echo $form->textField($model,'net_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_of_installation'); ?>
		<?php echo $form->textField($model,'year_of_installation',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year_of_destruction'); ?>
		<?php echo $form->textField($model,'year_of_destruction',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typeofground_id'); ?>
		<?php echo $form->textField($model,'typeofground_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typeoffoundation_id'); ?>
		<?php echo $form->textField($model,'typeoffoundation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typeoffastening_id'); ?>
		<?php echo $form->textField($model,'typeoffastening_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditionsofsurvey_id'); ?>
		<?php echo $form->textField($model,'conditionsofsurvey_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitude_n'); ?>
		<?php echo $form->textField($model,'latitude_n'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitude_e'); ?>
		<?php echo $form->textField($model,'longitude_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altitude_h'); ?>
		<?php echo $form->textField($model,'altitude_h'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meas_first'); ?>
		<?php echo $form->textField($model,'meas_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meas_last'); ?>
		<?php echo $form->textField($model,'meas_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meas_count'); ?>
		<?php echo $form->textField($model,'meas_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meas_period_days'); ?>
		<?php echo $form->textField($model,'meas_period_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kroki'); ?>
		<?php echo $form->textField($model,'kroki',array('size'=>60,'maxlength'=>100)); ?>
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