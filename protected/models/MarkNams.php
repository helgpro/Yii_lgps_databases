<?php

/**
 * This is the model class for table "mark_nams".
 *
 * The followings are the available columns in table 'mark_nams':
 * @property integer $id
 * @property string $markers_name
 * @property string $description
 * @property integer $markreg_id
 */
class MarkNams extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mark_nams';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('markers_name', 'required'),
			array('markreg_id', 'numerical', 'integerOnly'=>true),
                        array(' description, markreg_id', 'safe'),
                        array('markers_name', 'unique'),
			array('markers_name', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, markers_name, description, markreg_id', 'safe', 'on'=>'search'),
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
			'markers_name' => 'Имена марок',
			'description' => 'Описание',
			'markreg_id' => 'Markreg',
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
		$criteria->compare('markers_name',$this->markers_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('markreg_id',$this->markreg_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pagesize'=>100),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MarkNams the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
         public static function all(){
            $models = self::model()->findAll();
            return CHtml::listData($models,'id','markers_name');
             
            
        }
        public static function allattr($markerName_id){
            $models = self::model()->findByPk($markerName_id);// поиск марки по id
           // print_r($models);
            if($models){
            $name =$models->markers_name; // возврат что нашел
            return $name;
            }else return false;
            
        }
         
}
