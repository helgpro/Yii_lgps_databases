<?php
/* @var $this DatabaseController */
/* @var $model Database */

$this->breadcrumbs=array(
	'Databases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Database', 'url'=>array('index')),
	array('label'=>'Manage Database', 'url'=>array('admin')),
);
?>

<h1>Create Database</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>