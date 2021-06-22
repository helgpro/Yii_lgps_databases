<?php
/* @var $this MarkNamsController */
/* @var $model MarkNams */

$this->breadcrumbs=array(
	'Имена марок'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Исправить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверенны удалить?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>View MarkNams #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'markers_name',
		'description',
		'markreg_id',
	),
)); ?>
