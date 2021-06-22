<?php

/**
 * This is the model class for table "trips".
 *
 * The followings are the available columns in table 'trips':
 * @property integer $id
 * @property string $tour_name
 * @property string $name
 * @property string $operator_id
 * @property integer $driver_id
 * @property integer $transport_id
 * @property string $check_out
 */
class Trips extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trips';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tour_name, name, operator_id, driver_id, transport_id, check_out', 'required'),
			array('driver_id, transport_id', 'numerical', 'integerOnly'=>true),
			array('tour_name', 'length', 'max'=>6),
			array('name', 'length', 'max'=>50),
			array('operator_id', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tour_name, name, operator_id, driver_id, transport_id, check_out', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tour_name' => 'Tour Name',
			'name' => 'Name',
			'operator_id' => 'Operator',
			'driver_id' => 'Driver',
			'transport_id' => 'Transport',
			'check_out' => 'Check Out',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tour_name',$this->tour_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('operator_id',$this->operator_id,true);
		$criteria->compare('driver_id',$this->driver_id);
		$criteria->compare('transport_id',$this->transport_id);
		$criteria->compare('check_out',$this->check_out,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trips the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
