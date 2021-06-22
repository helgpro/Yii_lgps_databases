<?php
/* @var $this ReceiversController */
/* @var $data Receivers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('setI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->setI), array('view', 'id'=>$data->id)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('igs_code')); ?>:</b>
	<?php echo CHtml::encode($data->igs_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_num')); ?>:</b>
	<?php echo CHtml::encode($data->serial_num); ?>
	<br />

	


</div>