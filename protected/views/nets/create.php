<?php
/* @var $this NetsController */
/* @var $model Nets */

$this->breadcrumbs=array(
	'Сети'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Create Nets</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>