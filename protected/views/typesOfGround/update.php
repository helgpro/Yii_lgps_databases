<?php
/* @var $this TypesOfGroundController */
/* @var $model TypesOfGround */

$this->breadcrumbs=array(
	'Тип грунта'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'справить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Update TypesOfGround <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>