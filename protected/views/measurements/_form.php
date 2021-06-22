<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'measurements-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля  <span class="required">*</span> обязательные.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'markerName_id'); ?>
		 <?php
               
                 $name = MarkNams::allattr($model->markerName_id);//возвращает либо имя марки либо false
                    if($name){ //если имя
                          echo $form->textField($model,'markerName_id',array('value' =>$name));
                                
                    }else{ //иначе пустое поле
                          echo $form->textField($model,'markerName_id',array('size'=>6,'maxlength'=>6));
                     }
                ?>
                <?php echo $form->error($model,'markerName_id'); ?>
            </div>
            

        <div class="row">
                <?php echo $form->labelEx($model,'b_date'); ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'b_date',
                        'htmlOptions' => array(
                        'size' => '20',         // textField size
                        'maxlength' => '20',    // textField maxlength
                        ),
                    
                ));
                ?>
                <?php echo $form->error($model,'b_date'); ?>
        </div>


        <div class="row">
                        <?php echo $form->labelEx($model,'b_time'); ?>
                        <?php $this->widget('application.extensions.timepicker.timepicker', 
                                                array(
                                                    'model'=>$model,
                                                    'name'=>'b_time',
                                                    'select'=> 'time',
                                                    'options' => array(
                                                    'showOn'=>'focus',
                                                    'timeFormat'=>'hh:mm:ss',
                                                    'htmlOptions' => array(
                                                    'size' => '10',         // textField size
                                                    'maxlength' => '10',    // textField maxlength
                                                        ),
                                                    ),
                                                )
                                            );?>       
                       <?php echo $form->error($model,'b_time'); ?>
         </div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'e_date'); ?>
	       <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'e_date',
                        'htmlOptions' => array(
                        'size' => '10',         // textField size
                        'maxlength' => '10',    // textField maxlength
                        ),
                    
                ));
                ?>
		<?php echo $form->error($model,'e_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e_time'); ?>
		<?php $this->widget('application.extensions.timepicker.timepicker', 
                                                array(
                                                    'model'=>$model,
                                                    'name'=>'e_time',
                                                    'select'=> 'time',
                                                    'options' => array(
                                                    'showOn'=>'focus',
                                                    'timeFormat'=>'hh:mm:ss',
                                                    'htmlOptions' => array(
                                                    'size' => '10',         // textField size
                                                    'maxlength' => '10',    // textField maxlength
                                                        ),
                                                    ),
                                                )
                                            );?>  
		<?php echo $form->error($model,'e_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sample_rate'); ?>
		<?php echo $form->textField($model,'sample_rate',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'sample_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tour_id'); ?>
		<?php echo $form->dropDownList($model,'tour_id', Tours::all()); ?>
		<?php echo $form->error($model,'tour_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agency_id'); ?>
		<?php echo $form->dropDownList($model,'agency_id', Agencies::all()); ?>
		<?php echo $form->error($model,'agency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operator_id'); ?>
		<?php echo $form->dropDownList($model,'operator_id', Operators::all()); ?>
		<?php echo $form->error($model,'operator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receiver_id'); ?>
		<?php echo $form->dropDownList($model,'receiver_id', Receivers::all()); ?>
		<?php echo $form->error($model,'receiver_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_id'); ?>
		<?php echo $form->dropDownList($model,'antenna_id', Antennas::all()); ?>
		<?php echo $form->error($model,'antenna_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_measurement'); ?>
		
                <?php echo $form->textField($model,'antenna_measurement',array( 'value'=>'')); ?>    
                                                   
          
		<?php echo $form->error($model,'antenna_measurement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antennaPosition'); ?>
		<?php echo $form->dropDownList($model,'antennaPosition', array(1=>'Vertikal',2=>'Slant')); ?>
		<?php echo $form->error($model,'antennaPosition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antenna_dh'); ?>
		<?php echo $form->textField($model,'antenna_dh',array('size'=>6,'maxlength'=>6)); ?>
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
		<?php echo $form->dropDownList($model,'status_id',  MeasurStatuses::all())  ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->dropDownList($model,'id_user', array('oper'=>'oper','admin'=>'admin')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->