<?php
/* @var $this Points1Controller */
/* @var $model Points1 */

$this->breadcrumbs=array(
	'Пункты'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	//array('label'=>'Create Points1', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#points1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Пункты</h1>
<?php 
echo '<b>Последние обновление<b> '.$datetime;
?>
<br>
<?php echo CHtml::link('Очистить таблицу пунктов',array('points1/delpoints')); ?>
<h6> Необходимо перед созданием пунктов очистить таблицу </h6>
<br>
<h5>
<?php echo CHtml::link('Создать пункты',array('points1/my')); ?>
</h5>
<hr>
<?php echo CHtml::link('Расширенный','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'points1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'marker_site',
		'marker_name',
		'net_number',
		'point_marks',
		'year_of_installation','year_of_destruction',
		'type_of_ground',
		'type_of_foundation',
		'type_of_fastening',
		'conditions_of_survey',
		'longitude_e',
		'latitude_n',
		'altitude_h',
		'country',
		//'kroki',
            array(
                    'name'=>'kroki',
                    'type'=>'raw',
                     'value'=>'CHtml::link($data->kroki)'
                  ),
		'b_date',
		'e_date',
		'count',
		'description',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
