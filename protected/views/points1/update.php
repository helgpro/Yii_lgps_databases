<?php
/* @var $this Points1Controller */
/* @var $model Points1 */

$this->breadcrumbs=array(
	'Points1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	//array('label'=>'Create Points1', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>