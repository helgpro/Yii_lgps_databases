<?php
/* @var $this TransportController */
/* @var $model Transport */

$this->breadcrumbs=array(
	'Transports'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Transport', 'url'=>array('index')),
	array('label'=>'Create Transport', 'url'=>array('create')),
	array('label'=>'Update Transport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Transport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transport', 'url'=>array('admin')),
);
?>

<h1>View Transport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'state_number',
		'fuel_consumption',
	),
)); ?>
