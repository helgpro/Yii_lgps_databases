<?php
/* @var $this PointsController */
/* @var $model Points */
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
		<?php echo $form->label($model,'marker_site'); ?>
		<?php echo $form->textField($model,'marker_site',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marker_name'); ?>
		<?php echo $form->textField($model,'marker_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'net_number'); ?>
		<?php echo $form->textField($model,'net_number',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point_marks'); ?>
		<?php echo $form->textArea($model,'point_marks',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'type_of_ground'); ?>
		<?php echo $form->textArea($model,'type_of_ground',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_foundation'); ?>
		<?php echo $form->textArea($model,'type_of_foundation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_of_fastening'); ?>
		<?php echo $form->textArea($model,'type_of_fastening',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditions_of_survey'); ?>
		<?php echo $form->textField($model,'conditions_of_survey',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitude_e'); ?>
		<?php echo $form->textField($model,'longitude_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitude_n'); ?>
		<?php echo $form->textField($model,'latitude_n'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altitude_h'); ?>
		<?php echo $form->textField($model,'altitude_h'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kroki'); ?>
		<?php echo $form->textField($model,'kroki',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'b_date'); ?>
		<?php echo $form->textField($model,'b_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e_date'); ?>
		<?php echo $form->textField($model,'e_date'); ?>
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