<?php
/* @var $this AntennasController */
/* @var $data Antennas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('set')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->set), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('igs_code')); ?>:</b>
	<?php echo CHtml::encode($data->igs_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_num')); ?>:</b>
	<?php echo CHtml::encode($data->serial_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vert_off')); ?>:</b>
	<?php echo CHtml::encode($data->vert_off); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horiz_off')); ?>:</b>
	<?php echo CHtml::encode($data->horiz_off); ?>
	<br />


</div>