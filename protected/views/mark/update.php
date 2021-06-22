<?php
/* @var $this MarkController */
/* @var $model Mark */

$this->breadcrumbs=array(
	'Марки'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Исправить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
//	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Исправление марки <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>