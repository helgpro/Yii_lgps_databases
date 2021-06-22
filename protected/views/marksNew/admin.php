<?php
/* @var $this MarksNewController */
/* @var $model MarksNew */

$this->breadcrumbs=array(
	'Marks News'=>array('index'),
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
	$('#marks-new-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Marks News</h1>
<?php echo CHtml::link('Обновить итервалы дат марок',array('marksNewUpdate/my/')); ?>
<br>




<div class="search-form" style="display:none">
  
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'marks-new-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
                 array('name'=>'shortname','value'=>'$data->mark->markers_name'),
		//'shortname',
		'mainMark',
                'name',
		'nets',
		'year_of_installation',
		'year_of_destruction',
		array('name'=>'typeofground_id','value'=>'$data->tyoGr->name'),
		array('name'=>'typeoffoundation_id','value'=>'$data->typOfOund->name'),
		array('name'=>'typeoffastening_id','value'=>'$data->tOfAs->name'),
		'conditionsofsurvey',
		'latitude_n',
		'longitude_e',
		'altitude_h',
		'meas_first',
		'meas_last',
		'meas_count',
		'meas_period_days',
		'country',
                array('name'=>'kroki', 'type'=>'raw','value'=>'CHtml::link($data->kroki)'),
		'description',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
