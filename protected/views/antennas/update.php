<?php
/* @var $this AntennasController */
/* @var $model Antennas */

$this->breadcrumbs=array(
	'Antennases'=>array('index'),
	$model->set=>array('view','id'=>$model->set),
	'Исправить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Update Antennas <?php echo $model->set; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>