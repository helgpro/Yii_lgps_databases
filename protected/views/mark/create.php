<?php
/* @var $this MarkController */
/* @var $model Mark */

$this->breadcrumbs=array(
	'Марки'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Марки</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>