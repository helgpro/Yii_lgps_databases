<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */

$this->breadcrumbs=array(
	'Izmereniyas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Izmereniya', 'url'=>array('index')),
	array('label'=>'Create Izmereniya', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#izmereniya-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Izmereniyas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'izmereniya-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'measurement_id',
		'marker_id',
		'b_date',
		'b_time',
		'e_date',
		'e_time',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
