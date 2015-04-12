<?php

/**
 * This is the model class for table "pestes".
 *
 * The followings are the available columns in table 'pestes':
 * @property integer $id
 * @property string $nombre
 * @property string $tipo_peste
 * @property string $nombre_cientifico
 * @property string $imagen
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property PlantasPestes[] $plantasPestes
 */
class Pestes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pestes the static model class
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
		return 'pestes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo_peste, nombre_cientifico', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			array('estado', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, tipo_peste, nombre_cientifico, imagen, estado', 'safe', 'on'=>'search'),
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
			'plantasPestes' => array(self::HAS_MANY, 'PlantasPestes', 'Pestes_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'tipo_peste' => 'Tipo Peste',
			'nombre_cientifico' => 'Nombre Cientifico',
			'imagen' => 'Imagen',
			'estado' => 'Estado',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo_peste',$this->tipo_peste,true);
		$criteria->compare('nombre_cientifico',$this->nombre_cientifico,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}