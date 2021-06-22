<?php
/* @var $this MarkersDistancesController */
/* @var $data MarkersDistances */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_marker_number')); ?>:</b>
	<?php echo CHtml::encode($data->first_marker_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('second_marker_number')); ?>:</b>
	<?php echo CHtml::encode($data->second_marker_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distance')); ?>:</b>
	<?php echo CHtml::encode($data->distance); ?>
	<br />


</div>