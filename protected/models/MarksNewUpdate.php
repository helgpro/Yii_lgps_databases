<?php

/**
 * This is the model class for table "marksNew".
 *
 * The followings are the available columns in table 'marksNew':
 * @property integer $id
 * @property string $name
 * @property integer $shortname
 * @property string $mainMark
 * @property string $nets
 * @property string $year_of_installation
 * @property string $year_of_destruction
 * @property integer $typeofground_id
 * @property integer $typeoffoundation_id
 * @property integer $typeoffastening_id
 * @property string $conditionsofsurvey
 * @property double $latitude_n
 * @property double $longitude_e
 * @property double $altitude_h
 * @property string $meas_first
 * @property string $meas_last
 * @property integer $meas_count
 * @property integer $meas_period_days
 * @property string $country
 * @property string $kroki
 * @property string $description
 */
class MarksNewUpdate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marksNew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                //        array('name,  shortname,  mainMark, nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey, latitude_n, longitude_e, altitude_h, meas_first, meas_last, description', 'required'),
			array('name, shortname, mainMark, nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country,kroki, description', 'required'),
			//array('shortname, typeofground_id, typeoffoundation_id, typeoffastening_id, meas_count, meas_period_days', 'numerical', 'integerOnly'=>true),
			array('name, shortname, mainMark, nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country,kroki, description', 'safe'),
                        array('latitude_n, longitude_e, altitude_h', 'numerical'),
			array('name, country, kroki', 'length', 'max'=>100),
			array('mainMark, year_of_installation, year_of_destruction', 'length', 'max'=>4),
			array('nets, conditionsofsurvey', 'length', 'max'=>5),
			array('description', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, shortname, mainMark, nets, year_of_installation, year_of_destruction, typeofground_id, typeoffoundation_id, typeoffastening_id, conditionsofsurvey, latitude_n, longitude_e, altitude_h, meas_first, meas_last, meas_count, meas_period_days, country, kroki, description', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'shortname' => 'Shortname',
			'mainMark' => 'Main Mark',
			'nets' => 'Nets',
			'year_of_installation' => 'Year Of Installation',
			'year_of_destruction' => 'Year Of Destruction',
			'typeofground_id' => 'Typeofground',
			'typeoffoundation_id' => 'Typeoffoundation',
			'typeoffastening_id' => 'Typeoffastening',
			'conditionsofsurvey' => 'Conditionsofsurvey',
			'latitude_n' => 'Latitude N',
			'longitude_e' => 'Longitude E',
			'altitude_h' => 'Altitude H',
			'meas_first' => 'Meas First',
			'meas_last' => 'Meas Last',
			'meas_count' => 'Meas Count',
			'meas_period_days' => 'Meas Period Days',
			'country' => 'Country',
			'kroki' => 'Kroki',
			'description' => 'Description',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('shortname',$this->shortname);
		$criteria->compare('mainMark',$this->mainMark,true);
		$criteria->compare('nets',$this->nets,true);
		$criteria->compare('year_of_installation',$this->year_of_installation,true);
		$criteria->compare('year_of_destruction',$this->year_of_destruction,true);
		$criteria->compare('typeofground_id',$this->typeofground_id);
		$criteria->compare('typeoffoundation_id',$this->typeoffoundation_id);
		$criteria->compare('typeoffastening_id',$this->typeoffastening_id);
		$criteria->compare('conditionsofsurvey',$this->conditionsofsurvey,true);
		$criteria->compare('latitude_n',$this->latitude_n);
		$criteria->compare('longitude_e',$this->longitude_e);
		$criteria->compare('altitude_h',$this->altitude_h);
		$criteria->compare('meas_first',$this->meas_first,true);
		$criteria->compare('meas_last',$this->meas_last,true);
		$criteria->compare('meas_count',$this->meas_count);
		$criteria->compare('meas_period_days',$this->meas_period_days);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarksNewUpdate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
