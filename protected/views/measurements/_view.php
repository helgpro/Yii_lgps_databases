<?php
/* @var $this MeasurementsController */
/* @var $data Measurements */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mark->markers_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_date')); ?>:</b>
	<?php echo CHtml::encode($data->b_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_time')); ?>:</b>
	<?php echo CHtml::encode($data->b_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_date')); ?>:</b>
	<?php echo CHtml::encode($data->e_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_time')); ?>:</b>
	<?php echo CHtml::encode($data->e_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sample_rate')); ?>:</b>
	<?php echo CHtml::encode($data->sample_rate); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('tour_id')); ?>:</b>
	<?php echo CHtml::encode($data->tour->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agency_id')); ?>:</b>
	<?php echo CHtml::encode($data->agency->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operator_id')); ?>:</b>
	<?php echo CHtml::encode($data->operator->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiver_id')); ?>:</b>
	<?php echo CHtml::encode($data->receiver->setI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antenna_id')); ?>:</b>
	<?php echo CHtml::encode($data->antenna->set); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antenna_measurement')); ?>:</b>
	<?php echo CHtml::encode($data->antenna_measurement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antennaPosition')); ?>:</b>
	<?php echo CHtml::encode($data->antenPosition->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antenna_dh')); ?>:</b>
	<?php echo CHtml::encode($data->antenna_dh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sours_data')); ?>:</b>
	<?php echo CHtml::encode($data->sours_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value_size')); ?>:</b>
	<?php echo CHtml::encode($data->value_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support_data')); ?>:</b>
	<?php echo CHtml::encode($data->support_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rinex_file')); ?>:</b>
	<?php echo CHtml::encode($data->rinex_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apriori_x')); ?>:</b>
	<?php echo CHtml::encode($data->apriori_x); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apriori_y')); ?>:</b>
	<?php echo CHtml::encode($data->apriori_y); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apriori_z')); ?>:</b>
	<?php echo CHtml::encode($data->apriori_z); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weather')); ?>:</b>
	<?php echo CHtml::encode($data->weather); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->short_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />



</div>