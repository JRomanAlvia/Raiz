<?php

/**
 * This is the model class for table "plantas".
 *
 * The followings are the available columns in table 'plantas':
 * @property integer $id
 * @property string $descripcion
 * @property string $descripcion_cientifica
 * @property string $tiempo_cocecha
 * @property string $epoca_anio
 * @property string $imagen
 * @property integer $padre_id
 *
 * The followings are the available model relations:
 * @property Cultivo[] $cultivos
 * @property PlantasPestes[] $plantasPestes
 */
class Plantas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Plantas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('padre_id', 'required'),
			array('padre_id', 'numerical', 'integerOnly'=>true),
			array('descripcion, descripcion_cientifica, tiempo_cocecha, epoca_anio', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descripcion, descripcion_cientifica, tiempo_cocecha, epoca_anio, imagen, padre_id', 'safe', 'on'=>'search'),
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
			'cultivos' => array(self::HAS_MANY, 'Cultivo', 'Plantas_id'),
			'plantasPestes' => array(self::HAS_MANY, 'PlantasPestes', 'Plantas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion' => 'Descripcion',
			'descripcion_cientifica' => 'Descripcion Cientifica',
			'tiempo_cocecha' => 'Tiempo Cocecha',
			'epoca_anio' => 'Epoca Anio',
			'imagen' => 'Imagen',
			'padre_id' => 'Padre',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('descripcion_cientifica',$this->descripcion_cientifica,true);
		$criteria->compare('tiempo_cocecha',$this->tiempo_cocecha,true);
		$criteria->compare('epoca_anio',$this->epoca_anio,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('padre_id',$this->padre_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}