<?php
/* @var $this MarksNewController */
/* @var $model MarksNew */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marks-new-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с  <span class="required">*</span> обязательные.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'shortname'); ?>
            <?php
               
                 $name = MarkNams::allattr($model->shortname);//возвращает либо имя марки либо false
                    if($name){ //если имя
                          echo $form->textField($model,'shortname',array('value' =>$name));
                                 
                    }else{ //иначе пустое поле
                          echo $form->textField($model,'shortname',array('size'=>6,'maxlength'=>6));
                     }
                ?>
		
		
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





	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Обновить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->