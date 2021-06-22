<?php
/* @var $this MeasurStatusesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Measur Statuses',
);

$this->menu=array(
	array('label'=>'Create MeasurStatuses', 'url'=>array('create')),
	array('label'=>'Manage MeasurStatuses', 'url'=>array('admin')),
);
?>

<h1>Статус</h1>
<select id="selectbox">
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/antennas">Антенны</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/MarkNams">Марки Имена</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/MarkersDistances">Дистанция марок</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/ConditionsOfSurvey" selected>Режимы измерения</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/countries" selected>Страны</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/marks" selected>Марки</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/nets" selected>Сети </option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/operators" selected>Операторы</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/receivers" selected>Приемники</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/tours" selected>Кампании</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfAntennaPosition" selected>Типы установки антен</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfFastening" selected>Тип конструкции</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfFoundation" selected>Типы основания</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfGround" selected>Тип груна</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurements" selected>Измерения</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/agencies" selected>организации</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/points" selected>Пункты</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurementsShort" selected>Измерения(представл)</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurStatuses" selected>Статусы</option>
    <option value= <?php echo Yii::app()->request->baseUrl; ?>"/measureFault">Неудачные измерения</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurStatuses" selected>Статусы</option>
</select>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
