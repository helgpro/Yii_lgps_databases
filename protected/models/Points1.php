<?php

/**
 * This is the model class for table "points1".
 *
 * The followings are the available columns in table 'points1':
 * @property integer $id
 * @property string $marker_site
 * @property string $marker_name
 * @property string $net_number
 * @property string $point_marks
 * @property string $year_of_installation
 * @property string $year_of_destruction
 * @property string $type_of_ground
 * @property string $type_of_foundation
 * @property string $type_of_fastening
 * @property string $conditions_of_survey
 * @property double $longitude_e
 * @property double $latitude_n
 * @property double $altitude_h
 * @property string $country
 * @property string $kroki
 * @property string $b_date
 * @property string $e_date
 * @property string $description
 */
class Points1 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'points1';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('', 'required'),
			array('longitude_e, latitude_n, altitude_h, count', 'numerical'),
			array('marker_site', 'length', 'max'=>50),
			array('marker_name, description', 'length', 'max'=>30),
			array('net_number', 'length', 'max'=>3),
			array('year_of_installation, year_of_destruction', 'length', 'max'=>4),
			array('conditions_of_survey', 'length', 'max'=>1),
			array('country', 'length', 'max'=>20),
			array('kroki', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
                        array('marker_name, net_number, point_marks, year_of_installation, year_of_destruction, type_of_ground, type_of_foundation, type_of_fastening, conditions_of_survey, longitude_e, latitude_n, altitude_h, country, kroki, b_date, e_date, count, description','safe'),
			array('id, marker_site, marker_name, net_number, point_marks, year_of_installation, year_of_destruction, type_of_ground, type_of_foundation, type_of_fastening, conditions_of_survey, longitude_e, latitude_n, altitude_h, country, kroki, b_date, e_date, description', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
           //         'mark'=> array(self::BELONGS_TO, 'MarkNams', 'shortname'),//marka
                    //'name' =>  array(self::BELONGS_TO, 'MarkNams', 'name'),
                    //'countris'=>array(self::BELONGS_TO, 'Countries', 'country'),
                    //'nets'=>array(self::BELONGS_TO, 'Nets', 'net_id'),
           //         'tyoGr'=>array(self::BELONGS_TO, 'TypesOfGround', 'typeofground_id'),
           //         'tOfAs'=>array(self::BELONGS_TO, 'TypesOfFastening', 'typeoffastening_id'),
           //         'typOfOund'=>array(self::BELONGS_TO, 'TypesOfFoundation', 'typeoffoundation_id'),
                    //'cond'=>array(self::BELONGS_TO, 'ConditionsOfSurvey', 'conditionsofsurvey_id'),
                   
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marker_site' => 'Пункт',
			'marker_name' => 'Название',
			'net_number' => 'Сеть',
			'point_marks' => 'Марки',
			'year_of_installation' => 'Год устан',
			'year_of_destruction' => 'Год разруш',
			'type_of_ground' => 'Грунт',
			'type_of_foundation' => 'тип Основ',
			'type_of_fastening' => 'тип Марки',
			'conditions_of_survey' => 'Режим',
			'longitude_e' => 'Кор E',
			'latitude_n' => 'Кор N',
			'altitude_h' => 'Кор H',
			'country' => 'Страна',
			'kroki' => 'Крок',
			'b_date' => 'Нач изм',
			'e_date' => 'кон изм',
                        'count'=>'колличество измерений',
			'description' => 'Примечание',
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
		$criteria->compare('marker_site',$this->marker_site,true);
		$criteria->compare('marker_name',$this->marker_name,true);
		$criteria->compare('net_number',$this->net_number,true);
		$criteria->compare('point_marks',$this->point_marks,true);
		$criteria->compare('year_of_installation',$this->year_of_installation,true);
		$criteria->compare('year_of_destruction',$this->year_of_destruction,true);
		$criteria->compare('type_of_ground',$this->type_of_ground,true);
		$criteria->compare('type_of_foundation',$this->type_of_foundation,true);
		$criteria->compare('type_of_fastening',$this->type_of_fastening,true);
		$criteria->compare('conditions_of_survey',$this->conditions_of_survey,true);
		$criteria->compare('longitude_e',$this->longitude_e);
		$criteria->compare('latitude_n',$this->latitude_n);
		$criteria->compare('altitude_h',$this->altitude_h);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('kroki',$this->kroki,true);
		$criteria->compare('b_date',$this->b_date,true);
		$criteria->compare('e_date',$this->e_date,true);
                $criteria->compare('count',$this->count,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Points1 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
