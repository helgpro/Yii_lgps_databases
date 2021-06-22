<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */

$this->breadcrumbs=array(
	'Trips Marks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TripsMarks', 'url'=>array('index')),
	array('label'=>'Create TripsMarks', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trips-marks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trips Marks</h1>

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
	'id'=>'trips-marks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'marker_number',
		'number_in_trip',
		'distance_from_previous_marker',
		'measurement_start',
		'measurement_finish',
		/*
		'comment',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
