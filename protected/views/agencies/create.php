<?php
/* @var $this AgenciesController */
/* @var $model Agencies */

$this->breadcrumbs=array(
	'Agencies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agencies', 'url'=>array('index')),
	array('label'=>'Manage Agencies', 'url'=>array('admin')),
);
?>

<h1>Create Agencies</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>