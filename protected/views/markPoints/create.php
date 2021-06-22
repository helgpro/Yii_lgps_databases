<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */

$this->breadcrumbs=array(
	'Имена пунктов'=>array('index'),
	'Создание пунктов',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создание имени пункта</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>