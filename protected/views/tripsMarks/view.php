<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */

$this->breadcrumbs=array(
	'Trips Marks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TripsMarks', 'url'=>array('index')),
	array('label'=>'Create TripsMarks', 'url'=>array('create')),
	array('label'=>'Update TripsMarks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TripsMarks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TripsMarks', 'url'=>array('admin')),
);
?>

<h1>View TripsMarks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marker_number',
		'number_in_trip',
		'distance_from_previous_marker',
		'measurement_start',
		'measurement_finish',
		'comment',
	),
)); ?>
