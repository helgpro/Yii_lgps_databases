<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */

$this->breadcrumbs=array(
	'Измерения'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#measurements-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление</h1>



<?php echo CHtml::link('Рассширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'measurements-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'markerName_id',
                array( 'name'=>'markName_search','header'=>'Марка', 'value'=>'$data->mark->markers_name' ),
           //  array( 'name'=>'markerName_id', 'value'=>'$data->mark->markers_name','filter'=>MarkNams::all()),
            array('name'=>'b_date',
                //'htmlOptions' => array('style'=>'width: 50px;'),
                'header'=>'Дата начала',
                'headerHtmlOptions'=>array('width'=>2), //maybe I'm missing something?),
		//'b_date',
                ),
		'b_time',
		'e_date',
		'e_time',
		
		//'sample_rate',
            array('name'=>'sample_rate',
                //'htmlOptions' => array('style'=>'width: 50px;'),
                //'header'=>'Дата начала',
                //'headerHtmlOptions'=>array('width'=>12), //maybe I'm missing something?),
		//'b_date',
                ),
		//'tour_id',
            array( 'name'=>'tour_id', 'value'=>'$data->tour->name' , 'filter' => Tours::all()),
		//'agency_id',
            array( 'name'=>'agency_id', 'value'=>'$data->agency->title' ,'filter' => Agencies::all()),
		//'operator_id',
            array( 'name'=>'operator_id', 'value'=>'$data->operator->name' ,'filter' => Operators::all()),
		//'receiver_id',
            array( 'name'=>'receiver_id', 'value'=>'$data->receiver->setI' ,'filter' => Receivers::all()),
		//'antenna_id',
             array( 'name'=>'antenna_id', 'value'=>'$data->antenna->set' ,'filter' => Antennas::all()),
		'antenna_measurement',
		//'antennaPosition',
            array( 'name'=>'antennaPosition', 'value'=>'$data->antenPosition->name' ,'filter' => TypesOfAntennaPosition::all()),
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
                array( 'name'=>'status_id', 'value'=>'$data->status->short_desc', 'filter' => MeasurStatuses::all()),
		'id_user',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
