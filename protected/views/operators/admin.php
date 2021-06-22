<?php
/* @var $this OperatorsController */
/* @var $model Operators */

$this->breadcrumbs=array(
	'Операторы'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#operators-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Операторы</h1>



<?php echo CHtml::link('Рассширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
$this->widget('EExcelView', array(
    'dataProvider'=> $model->search(),
     'columns'=>array(
		'id',
		'title',
		'name',
		'agency_id',
		'id_user',
		array(
			'class'=>'CButtonColumn',
		),
	),
    'title'=>'Points',
    'autoWidth'=>false,
    'template'=>"{summary}\n{items}\n{exportbuttons}\n{pager}", 
    
		
));

?>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'operators-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'name',
		'agency_id',
		'id_user',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
