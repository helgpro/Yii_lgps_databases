<?php
/* @var $this MarkPointsController */
/* @var $data MarkPoints */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('shortname')); ?>:</b>
	<?php echo CHtml::encode($data->shortname); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('condsurv')); ?>:</b>
	<?php echo CHtml::encode($data->condsurv); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('nets')); ?>:</b>
	<?php echo CHtml::encode($data->nets); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('kroki')); ?>:</b>
	<?php echo CHtml::link($data->kroky); ?>
	<br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>