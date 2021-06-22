<?php
/* @var $this MeasureFaultController */
/* @var $model MeasureFault */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'measure-fault-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля <span class="required">*</span> обязательные.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'marker_site'); ?>
		<?php echo $form->textField($model,'marker_site',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'marker_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'date',
                        'options' => array( 'dateFormat' => 'yy-mm-dd' ),
                        'htmlOptions' => array(
                        'size' => '20',         // textField size
                        'maxlength' => '20',    // textField maxlength
                        ),
                    
                ));
                ?>
		
        
         </div>
	<div class="row">
		<?php echo $form->labelEx($model,'tour'); ?>
		 <?php echo $form->dropDownList($model,'tour',  Tours::all()); ?>
		<?php echo $form->error($model,'tour'); ?>
	</div>
      

	<div class="row">
		<?php echo $form->labelEx($model,'operator'); ?>
		 <?php echo $form->dropDownList($model,'operator', Operators::all()); ?>
		<?php echo $form->error($model,'operator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->dropDownList($model,'id_user',array('oper'=>'oper','admin'=>'admin')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->