<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */

$this->breadcrumbs=array(
	'Измерения'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Исправить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Измерения #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'markerName_id',
            array( 'name'=>'markerName_id', 'value'=>$model->mark->markers_name ),
		'b_date',
		'b_time',
		'e_date',
		'e_time',
		//'tour_id',
     
             array(
                   'name'=>'tour_id',
                    'value'=>$model->tour->name,
                 ),
		//'agency_id',
             array( 'name'=>'agency_id', 'value'=>$model->agency->title ),
		//'operator_id',
             array( 'name'=>'operator_id', 'value'=>$model->operator->name),
		//'receiver_id',
             array( 'name'=>'receiver_id', 'value'=>$model->receiver->setI),
		//'antenna_id',
             array( 'name'=>'antenna_id', 'value'=>$model->antenna->set),
		//'antenna_measurement',
		//'antennaPosition',
            array( 'name'=>'antennaPosition', 'value'=>$model->antenPosition->name),
		//'antenna_measurement',
		//'antennaPosition',
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
		//'status_id',
            array( 'name'=>'status_id', 'value'=>$model->status->short_desc),
		//'id_user',->status->short_desc
            'id_user',
	),
)); ?>
