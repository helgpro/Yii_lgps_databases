<?php

/**
 * This is the model class for table "mark_points".
 *
 * The followings are the available columns in table 'mark_points':
 * @property integer $id
 * @property string $name
 * @property string $shortname
 * @property string $nets
 * @property string $condsurv
 * @property string $country
 * @property string $kroky
 * @property string description
 */
class MarkPoints extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mark_points';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name ,shortname, nets, condsurv, country', 'required'),
                        array('name', 'unique'),
			array('shortname', 'length', 'max'=>100),
                        array('nets', 'length', 'max'=>4),
                        array('condsurv', 'length', 'max'=>4),
                        array('country', 'length', 'max'=>50),
                        array('kroky', 'length', 'max'=>255),
                        array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, shortname, nets, condsurv, country, kroky, description', 'safe', 'on'=>'search'),
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
			'name' => 'Пункт',
                        'shortname' => 'ГлМарка',
                        'nets' => 'Сеть',
                        'condsurv' => 'Реж изм',
                        'country' => 'Страна',
                        'kroky' => 'Кроки',
                        'description' => 'Описание',
                        
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
                $criteria->compare('shortname',$this->shortname,true);
                $criteria->compare('nets',$this->nets,true);
                $criteria->compare('condsurv',$this->condsurv,true);
                $criteria->compare('country',$this->country,true);
                $criteria->compare('kroky',$this->kroky,true);
                $criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                       
                        'pagination'=>array('pagesize'=>100),
                          
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarkPoints the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
         public static function allattr($points_id){
          
            $models = self::model()->findByPk($points_id);// поиск марки по id
           // print_r($models);
            if($models){
            $name =$models->name; // возврат что нашел
            return $name;
            }else return false;
            
        }
}
