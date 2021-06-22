<?php
/* @var $this ReceiversController */
/* @var $model Receivers */

$this->breadcrumbs=array(
	'Приемники'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Create Receivers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>