<?php
/* @var $this MarkNamsController */
/* @var $model MarkNams */

$this->breadcrumbs=array(
	'Имена марок'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Исправить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Update MarkNams <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>