<?php
/* @var $this MarkController */
/* @var $data Mark */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('marker_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mark->markers_name), array('view', 'id'=>$data->id)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('points_id')); ?>:</b>
	<?php echo CHtml::encode($data->points->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('net_id')); ?>:</b>
	<?php echo CHtml::encode($data->nets->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_of_installation')); ?>:</b>
	<?php echo CHtml::encode($data->year_of_installation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_of_destruction')); ?>:</b>
	<?php echo CHtml::encode($data->year_of_destruction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typeofground_id')); ?>:</b>
	<?php echo CHtml::encode($data->tyoGr->name); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('typeoffoundation_id')); ?>:</b>
	<?php echo CHtml::encode($data->typOfOund->name); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('typeoffastening_id')); ?>:</b>
	<?php echo CHtml::encode($data->tOfAs->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionsofsurvey_id')); ?>:</b>
	<?php echo CHtml::encode($data->cond->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude_n')); ?>:</b>
	<?php echo CHtml::encode($data->latitude_n); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude_e')); ?>:</b>
	<?php echo CHtml::encode($data->longitude_e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altitude_h')); ?>:</b>
	<?php echo CHtml::encode($data->altitude_h); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meas_first')); ?>:</b>
	<?php echo CHtml::encode($data->meas_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meas_last')); ?>:</b>
	<?php echo CHtml::encode($data->meas_last); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meas_count')); ?>:</b>
	<?php echo CHtml::encode($data->meas_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meas_period_days')); ?>:</b>
	<?php echo CHtml::encode($data->meas_period_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kroki')); ?>:</b>
	<?php echo CHtml::encode($data->kroki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	*/ ?>

</div>