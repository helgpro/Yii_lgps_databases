<?php
/* @var $this MarkController */
/* @var $model Mark */

$this->breadcrumbs=array(
	'Марки'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	//array('label'=>'Создать ', 'url'=>array('create')),
	//array('label'=>'Исправить ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ', 'url'=>array('admin')),
);
?>

<h1>Вид #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array('name'=>'marker_id','value'=>$model->mark->markers_name),
		//'marker_id',
		//'points_id',
            array('name'=>'points_id','value'=>$model->points->name),
            array('name'=>'net_id','value'=>$model->nets->name),
            array('name'=>'typeofground_id','value'=>$model->tyoGr->name),
            array('name'=>'typeoffoundation_id','value'=>$model->typOfOund->name),
            array('name'=>'typeoffastening_id','value'=>$model->tOfAs->name),
            array('name'=>'conditionsofsurvey_id','value'=>$model->cond->name),
		//'net_id',
		'year_of_installation',
		'year_of_destruction',
		//'typeofground_id',
		//'typeoffoundation_id',
		//'typeoffastening_id',
		//'conditionsofsurvey_id',
		'latitude_n',
		'longitude_e',
		'altitude_h',
		'meas_first',
		'meas_last',
		'meas_count',
		'meas_period_days',
		'country',
		//'count',
               array('name'=>'kroki','type'=>'raw',CHtml::link($model->kroki)),
		'id_user',
	),
)); ?>
