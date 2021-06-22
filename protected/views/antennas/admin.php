<?php
/* @var $this AntennasController */
/* @var $model Antennas */

$this->breadcrumbs=array(
	'Antennases'=>array('index'),
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
	$('#antennas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>





<select id="selectbox">
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/drivers" selected>drive</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/antennas">antena</option>
    <option value= <?php echo Yii::app()->request->baseUrl; ?>"/marks">gmail</option>
</select>



<h1>Управление Антенами</h1>




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'antennas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'set',
		'id_user',
		'igs_code',
		'serial_num',
		'vert_off',
		'horiz_off',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
