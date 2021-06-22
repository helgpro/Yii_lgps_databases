<?php
/* @var $this MarkNamsController */
/* @var $model MarkNams */

$this->breadcrumbs=array(
	'Имена марок'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создание новой марки</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>