<?php
/* @var $this DatabaseController */
/* @var $model Database */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Database', 'url'=>array('index')),
	array('label'=>'Create Database', 'url'=>array('create')),
	array('label'=>'View Database', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Database', 'url'=>array('admin')),
);
?>

<h1>Update Database <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>