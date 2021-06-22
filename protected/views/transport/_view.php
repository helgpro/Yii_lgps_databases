<?php
/* @var $this TransportController */
/* @var $data Transport */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_number')); ?>:</b>
	<?php echo CHtml::encode($data->state_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_consumption')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_consumption); ?>
	<br />


</div>