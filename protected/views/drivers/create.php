<?php
/* @var $this DriversController */
/* @var $model Drivers */

$this->breadcrumbs=array(
	'Водители'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список ', 'url'=>array('index')),
	array('label'=>'Управление ', 'url'=>array('admin')),
);
?>

<h1>Create Drivers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>