<?php
/* @var $this MarkController */
/* @var $model Mark */

$this->breadcrumbs=array(
	'Марки'=>array('index'),
	'Марки',
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
	$('#mark-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Марки</h1>

<?php echo CHtml::link('Обновить марки',array('mark/my')); ?>
<br>
<?php //echo CHtml::link('Рассширенный поиск','#',array('class'=>'search-button')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
      
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mark-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
              //  'Count',
           // array('name'=>'Count','value'=>$coont),
            //  array('name'=>'Count','value'=>'$data->Count'),
             array('name'=>'markName_search','value'=>'$data->mark->markers_name'),
		//'marker_id',
		//'points_id',
            array('name'=>'markPoint_Search','value'=>'$data->points->name'),
		//'net_id',
            array('name'=>'net_id','value'=>'$data->nets->name'),
		'year_of_installation',
		'year_of_destruction',
            array('name'=>'typeofground_id','value'=>'$data->tyoGr->name'),
		//'typeofground_id',
            array('name'=>'typeoffoundation_id','value'=>'$data->typOfOund->name'),
		//'typeoffoundation_id',
            array('name'=>'typeoffastening_id','value'=>'$data->tOfAs->name'),
		//'typeoffastening_id',
            array('name'=>'conditionsofsurvey_id','value'=>'$data->cond->name'),
		//'conditionsofsurvey_id',
		'latitude_n',
		'longitude_e',
		'altitude_h',
		'meas_first',
		'meas_last',
		'meas_count',
            //array('name'=>'meas_count','value'=>'count($data->mark->markers_name)'),
		'meas_period_days',
                array('name'=>'Countries','value'=>'$data->countris->name'),
		//'country',
		//'kroki',
                array('name'=>'kroki', 'type'=>'raw','value'=>'CHtml::link($data->kroki)'),
		'id_user',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
