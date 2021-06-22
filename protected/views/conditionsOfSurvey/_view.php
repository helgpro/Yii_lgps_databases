<?php
/* @var $this ConditionsOfSurveyController */
/* @var $data ConditionsOfSurvey */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
        <?php echo CHtml::encode($data->name); ?>
	<?php /*echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->name));*/ ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	


</div>