<?php
/* @var $this Points1Controller */
/* @var $data Points1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marker_site')); ?>:</b>
	<?php echo CHtml::encode($data->marker_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marker_name')); ?>:</b>
	<?php echo CHtml::encode($data->marker_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('net_number')); ?>:</b>
	<?php echo CHtml::encode($data->net_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point_marks')); ?>:</b>
	<?php echo CHtml::encode($data->point_marks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_of_installation')); ?>:</b>
	<?php echo CHtml::encode($data->year_of_installation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_of_destruction')); ?>:</b>
	<?php echo CHtml::encode($data->year_of_destruction); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_ground')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_ground); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_foundation')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_foundation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_fastening')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_fastening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditions_of_survey')); ?>:</b>
	<?php echo CHtml::encode($data->conditions_of_survey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude_e')); ?>:</b>
	<?php echo CHtml::encode($data->longitude_e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude_n')); ?>:</b>
	<?php echo CHtml::encode($data->latitude_n); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altitude_h')); ?>:</b>
	<?php echo CHtml::encode($data->altitude_h); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kroki')); ?>:</b>
	<?php echo CHtml::link($data->kroki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_date')); ?>:</b>
	<?php echo CHtml::encode($data->b_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_date')); ?>:</b>
	<?php echo CHtml::encode($data->e_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count')); ?>:</b>
	<?php echo CHtml::encode($data->count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	

</div>