<?php
/* @var $this AntennasController */
/* @var $model Antennas */

$this->breadcrumbs=array(
	'Antennases'=>array('index'),
	$model->set,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Изменить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Уверенны что хотите удалить?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>View Antennas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'set',
		'id_user',
		'igs_code',
		'serial_num',
		'vert_off',
		'horiz_off',
	),
)); ?>
