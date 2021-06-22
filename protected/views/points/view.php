<?php
/* @var $this PointsController */
/* @var $model Points */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	//array('label'=>'Создать', 'url'=>array('create')),
	//array('label'=>'Исправить', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Вид Пункты #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
		'kroki',
		'b_date',
		'e_date',
                'count',
		//'id_user',
	),
)); ?>
