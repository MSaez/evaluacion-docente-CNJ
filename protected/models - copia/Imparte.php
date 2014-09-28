<?php

/**
 * This is the model class for table "imparte".
 *
 * The followings are the available columns in table 'imparte':
 * @property integer $imp_id
 * @property string $asi_id
 * @property string $pro_rut
 * @property integer $cur_id
 *
 * The followings are the available model relations:
 * @property Curso $cur
 * @property Asignatura $asi
 * @property Profesor $proRut
 * @property Nota[] $notas
 */
class Imparte extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imparte';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('asi_id, pro_rut, cur_id', 'required'),
			array('cur_id', 'numerical', 'integerOnly'=>true),
			array('asi_id', 'length', 'max'=>11),
			array('pro_rut', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('imp_id, asi_id, pro_rut, cur_id', 'safe', 'on'=>'search'),
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
			'cur' => array(self::BELONGS_TO, 'Curso', 'cur_id'),
			'asi' => array(self::BELONGS_TO, 'Asignatura', 'asi_id'),
			'proRut' => array(self::BELONGS_TO, 'Profesor', 'pro_rut'),
			'notas' => array(self::HAS_MANY, 'Nota', 'im_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'imp_id' => 'Id',
			'asi_id' => 'Asignatura',
			'pro_rut' => 'Profesor',
			'cur_id' => 'Curso',
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

		$criteria->compare('imp_id',$this->imp_id);
		$criteria->compare('asi_id',$this->asi_id,true);
		$criteria->compare('pro_rut',$this->pro_rut,true);
		$criteria->compare('cur_id',$this->cur_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imparte the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getFullName() {
		

        $fullName = (! empty ( $this->pro_rut )) ? $this->proRut->pro_nombres.' '.$this->proRut->pro_paterno.' '.$this->proRut->pro_materno : '';
        $fullName .= (! empty ( $this->asi_id )) ? ((! empty ( $fullName )) ? " ," . $this->asi->asi_nombre : $this->asi_id) : '';
        $fullName .= (! empty ( $this->cur_id )) ? ((! empty ( $fullName )) ? " ," . $this->cur->cur_nombre : $this->cur_id) : '';
        return $fullName;
	}
}
