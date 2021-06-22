<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */

$this->breadcrumbs=array(
	'Izmereniyas'=>array('index'),
	$model->measurement_id,
);

$this->menu=array(
	array('label'=>'List Izmereniya', 'url'=>array('index')),
	array('label'=>'Create Izmereniya', 'url'=>array('create')),
	array('label'=>'Update Izmereniya', 'url'=>array('update', 'id'=>$model->measurement_id)),
	array('label'=>'Delete Izmereniya', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->measurement_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Izmereniya', 'url'=>array('admin')),
);
?>

<h1>View Izmereniya #<?php echo $model->measurement_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'measurement_id',
		'marker_id',
		'b_date',
		'b_time',
		'e_date',
		'e_time',
		'sample_rate',
		'tour_id',
		'agency_id',
		'operator_id',
		'receiver_id',
		'antenna_id',
		'antenna_measurement',
		'antenna_position_id',
		'antenna_dh',
		'sours_data',
		'value_size',
		'support_data',
		'rinex_file',
		'apriori_x',
		'apriori_y',
		'apriori_z',
		'weather',
		'note',
		'status_id',
		'id_user',
	),
)); ?>
