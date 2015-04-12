<?php

/**
 * This is the model class for table "cultivo".
 *
 * The followings are the available columns in table 'cultivo':
 * @property integer $id
 * @property string $longitud
 * @property string $latitud
 * @property string $fecha_inicio
 * @property string $area_cultivo
 * @property string $tipo_medida
 * @property string $num_planta
 * @property string $cantidad_cosecha
 * @property string $estado
 * @property integer $Usuarios_id
 * @property integer $Plantas_id
 * @property integer $City_id
 *
 * The followings are the available model relations:
 * @property Catastrofes[] $catastrofes
 * @property City $city
 * @property Plantas $plantas
 * @property Usuarios $usuarios
 */
class Cultivo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cultivo the static model class
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
		return 'cultivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuarios_id, Plantas_id, City_id', 'required'),
			array('Usuarios_id, Plantas_id, City_id', 'numerical', 'integerOnly'=>true),
			array('longitud, latitud, fecha_inicio, area_cultivo, tipo_medida, num_planta, estado', 'length', 'max'=>45),
			array('cantidad_cosecha', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, longitud, latitud, fecha_inicio, area_cultivo, tipo_medida, num_planta, cantidad_cosecha, estado, Usuarios_id, Plantas_id, City_id', 'safe', 'on'=>'search'),
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
			'catastrofes' => array(self::HAS_MANY, 'Catastrofes', 'Cultivo_id'),
			'city' => array(self::BELONGS_TO, 'City', 'City_id'),
			'plantas' => array(self::BELONGS_TO, 'Plantas', 'Plantas_id'),
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'Usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'longitud' => 'Longitud',
			'latitud' => 'Latitud',
			'fecha_inicio' => 'Fecha Inicio',
			'area_cultivo' => 'Area Cultivo',
			'tipo_medida' => 'Tipo Medida',
			'num_planta' => 'Num Planta',
			'cantidad_cosecha' => 'Cantidad Cosecha',
			'estado' => 'Estado',
			'Usuarios_id' => 'Usuarios',
			'Plantas_id' => 'Plantas',
			'City_id' => 'City',
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
		$criteria->compare('longitud',$this->longitud,true);
		$criteria->compare('latitud',$this->latitud,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('area_cultivo',$this->area_cultivo,true);
		$criteria->compare('tipo_medida',$this->tipo_medida,true);
		$criteria->compare('num_planta',$this->num_planta,true);
		$criteria->compare('cantidad_cosecha',$this->cantidad_cosecha,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('Usuarios_id',$this->Usuarios_id);
		$criteria->compare('Plantas_id',$this->Plantas_id);
		$criteria->compare('City_id',$this->City_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}