<?php
/* @var $this TripsMarksController */
/* @var $data TripsMarks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marker_number')); ?>:</b>
	<?php echo CHtml::encode($data->marker_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_in_trip')); ?>:</b>
	<?php echo CHtml::encode($data->number_in_trip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distance_from_previous_marker')); ?>:</b>
	<?php echo CHtml::encode($data->distance_from_previous_marker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('measurement_start')); ?>:</b>
	<?php echo CHtml::encode($data->measurement_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('measurement_finish')); ?>:</b>
	<?php echo CHtml::encode($data->measurement_finish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />


</div>