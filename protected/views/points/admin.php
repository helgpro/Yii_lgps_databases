<?php
/* @var $this PointsController */
/* @var $model Points */

$this->breadcrumbs=array(
	'Пункты'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	//array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#points-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Пункты</h2>
<?php 
echo '<b>Последние обновление<b> '.$datetime;
?>
<br>
<?php echo CHtml::link('Очистить таблицу пунктов',array('points/delpoints')); ?>
<h6> Необходимо перед созданием пунктов очистить таблицу </h6>
<br>
<h5>
<?php echo CHtml::link('Создать пункты',array('points/my')); ?>
</h5>
<hr>
<?php echo CHtml::link('Рассширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'points-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'marker_site',
		'marker_name',
		'net_number',
		'point_marks',
		'year_of_installation',
		
		'year_of_destruction',
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
                    //'value'=>$model->kroki."trcldc",
                     //'value'=>'CHtml::link($data->kroki)',
                     'value'=>'CHtml::link($data->kroki)'
                   
                ),
		'b_date',
		'e_date',
                'count',
		//'id_user',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
