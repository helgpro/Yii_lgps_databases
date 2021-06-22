<?php
/* @var $this MarkersDistancesController */
/* @var $model MarkersDistances */

$this->breadcrumbs=array(
	'Markers Distances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MarkersDistances', 'url'=>array('index')),
	array('label'=>'Create MarkersDistances', 'url'=>array('create')),
	array('label'=>'Update MarkersDistances', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MarkersDistances', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MarkersDistances', 'url'=>array('admin')),
);
?>

<h1>View MarkersDistances #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_marker_number',
		'second_marker_number',
		'distance',
	),
)); ?>
