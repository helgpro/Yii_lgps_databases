<?php
/* @var $this MarkController */
/* @var $model Mark */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mark-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательные.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_id'); ?>
            <?php
               
                 $name = MarkNams::allattr($model->marker_id);//возвращает либо имя марки либо false
                    if($name){ //если имя
                          echo $form->textField($model,'marker_id',array('value' =>$name));
                                 
                    }else{ //иначе пустое поле
                          echo $form->textField($model,'marker_id',array('size'=>6,'maxlength'=>6));
                     }
                ?>
		
		<?php echo $form->error($model,'marker_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'points_id'); ?>
             <?php
               
                 $name = MarkPoints::allattr($model->points_id);//возвращает либо имя марки либо false
                    if($name){ //если имя
                          echo $form->textField($model,'points_id',array('value' =>$name));
                                 
                    }else{ //иначе пустое поле
                          echo $form->textField($model,'points_id',array('size'=>80,'maxlength'=>30));
                     }
                ?>
		
		<?php echo $form->error($model,'points_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'net_id'); ?>
		<?php echo $form->dropDownList($model,'net_id', Nets::all()); ?>
		<?php echo $form->error($model,'net_id'); ?>
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
		<?php echo $form->labelEx($model,'typeofground_id'); ?>
		<?php echo $form->dropDownList($model,'typeofground_id', TypesOfGround::all()); ?>
		<?php echo $form->error($model,'typeofground_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typeoffoundation_id'); ?>
		<?php echo $form->dropDownList($model,'typeoffoundation_id', TypesOfFoundation::all()); ?>
		<?php echo $form->error($model,'typeoffoundation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typeoffastening_id'); ?>
		<?php echo $form->dropDownList($model,'typeoffastening_id', TypesOfFastening::all()); ?>
		<?php echo $form->error($model,'typeoffastening_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditionsofsurvey_id'); ?>
		<?php echo $form->dropDownList($model,'conditionsofsurvey_id', ConditionsOfSurvey::all()); ?>
		<?php echo $form->error($model,'conditionsofsurvey_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude_n'); ?>
		<?php echo $form->textField($model,'latitude_n'); ?>
		<?php echo $form->error($model,'latitude_n'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude_e'); ?>
		<?php echo $form->textField($model,'longitude_e'); ?>
		<?php echo $form->error($model,'longitude_e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altitude_h'); ?>
		<?php echo $form->textField($model,'altitude_h'); ?>
		<?php echo $form->error($model,'altitude_h'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meas_first'); ?>
		<?php echo $form->textField($model,'meas_first'); ?>
		<?php echo $form->error($model,'meas_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meas_last'); ?>
		<?php echo $form->textField($model,'meas_last'); ?>
		<?php echo $form->error($model,'meas_last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meas_count'); ?>
		<?php echo $form->textField($model,'meas_count'); ?>
		<?php echo $form->error($model,'meas_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meas_period_days'); ?>
		<?php echo $form->textField($model,'meas_period_days'); ?>
		<?php echo $form->error($model,'meas_period_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->dropDownList($model,'country', Countries::all()); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kroki'); ?>
		<?php echo $form->textField($model,'kroki',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kroki'); ?>
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