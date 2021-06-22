<?php
/* @var $this Receivers2Controller */
/* @var $data Receivers2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('set')); ?>:</b>
	<?php echo CHtml::encode($data->set); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('igs_code')); ?>:</b>
	<?php echo CHtml::encode($data->igs_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_num')); ?>:</b>
	<?php echo CHtml::encode($data->serial_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />


</div>