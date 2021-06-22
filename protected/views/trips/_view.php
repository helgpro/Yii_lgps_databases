<?php
/* @var $this TripsController */
/* @var $data Trips */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_name')); ?>:</b>
	<?php echo CHtml::encode($data->tour_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operator_id')); ?>:</b>
	<?php echo CHtml::encode($data->operator_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver_id')); ?>:</b>
	<?php echo CHtml::encode($data->driver_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transport_id')); ?>:</b>
	<?php echo CHtml::encode($data->transport_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_out')); ?>:</b>
	<?php echo CHtml::encode($data->check_out); ?>
	<br />


</div>