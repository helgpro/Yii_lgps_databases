<?php
/* @var $this DatabaseController */
/* @var $model Database */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Database', 'url'=>array('index')),
	array('label'=>'Create Database', 'url'=>array('create')),
	array('label'=>'Update Database', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Database', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Database', 'url'=>array('admin')),
);
?>

<h1>View Database #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'text',
	),
)); ?>
