<?php

/**
 * This is the model class for table "nota".
 *
 * The followings are the available columns in table 'nota':
 * @property string $id
 * @property integer $im_id
 * @property integer $ev_anio
 * @property integer $a1i1
 * @property integer $a1i2
 * @property integer $a1i3
 * @property integer $a1i4
 * @property integer $a1i5
 * @property integer $a1i6
 * @property integer $a1i7
 * @property integer $a2i1
 * @property integer $a2i2
 * @property integer $a2i3
 * @property integer $a2i4
 * @property integer $a2i5
 * @property integer $a2i6
 * @property integer $a2i7
 * @property integer $a2i8
 * @property integer $a2i9
 * @property integer $a2i10
 * @property integer $a2i11
 * @property integer $a3i1
 * @property integer $a3i2
 * @property integer $a3i3
 * @property integer $a3i4
 * @property integer $a3i5
 * @property integer $a3i6
 * @property integer $a3i7
 * @property integer $a3i8
 * @property integer $a3i9
 * @property integer $a3i10
 * @property string $fecha_ev
 * @property integer $pro_evaluador
 * @property integer $total_ambito1
 * @property integer $total_ambito2
 * @property integer $total_ambito3
 * @property integer $total_logros
 * @property integer $porcentaje_logro
 * @property integer $observacion
 * @property string $clasificacion
 * @property string $obs01
 * @property string $obs02
 * @property string $obs03
 * @property string $obs04
 * @property string $obs05
 * @property string $obs06
 * @property string $obs07
 * @property string $obs08
 * @property string $obs09
 * @property string $obs10
 * @property string $obs11
 * @property string $obs12
 * @property string $obs13
 * @property string $obs14
 * @property string $obs15
 * @property string $obs16
 * @property string $obs17
 * @property string $obs18
 * @property string $obs19
 * @property string $obs20
 * @property string $obs21
 * @property string $obs22
 * @property string $obs23
 * @property string $obs24
 * @property string $obs25
 * @property string $obs26
 * @property string $obs27
 * @property string $obs28
 *
 * The followings are the available model relations:
 * @property Imparte $im
 * @property TblUser $proEvaluador
 */
class Nota extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('im_id, ev_anio, a1i1, a1i2, a1i3, a1i4, a1i5, a1i6, a1i7, a2i1, a2i2, a2i3, a2i4, a2i5, a2i6, a2i7, a2i8, a2i9, a2i10, a2i11, a3i1, a3i2, a3i3, a3i4, a3i5, a3i6, a3i7, a3i8, a3i9, a3i10, fecha_ev, pro_evaluador, total_ambito1, total_ambito2, total_ambito3, total_logros, porcentaje_logro, observacion, clasificacion, obs01, obs02, obs03, obs04, obs05, obs06, obs07, obs08, obs09, obs10, obs11, obs12, obs13, obs14, obs15, obs16, obs17, obs18, obs19, obs20, obs21, obs22, obs23, obs24, obs25, obs26, obs27, obs28', 'required'),
			array('im_id, ev_anio, a1i1, a1i2, a1i3, a1i4, a1i5, a1i6, a1i7, a2i1, a2i2, a2i3, a2i4, a2i5, a2i6, a2i7, a2i8, a2i9, a2i10, a2i11, a3i1, a3i2, a3i3, a3i4, a3i5, a3i6, a3i7, a3i8, a3i9, a3i10, pro_evaluador, total_ambito1, total_ambito2, total_ambito3, total_logros, porcentaje_logro, observacion', 'numerical', 'integerOnly'=>true),
			array('clasificacion', 'length', 'max'=>16),
			array('observacion','numerical','min'=>0),
			array('observacion','numerical','max'=>5),
			array('a1i1, a1i2, a1i3, a1i4, a1i5, a1i6, a1i7, a2i1, a2i2, a2i3, a2i4, a2i5, a2i6, a2i7, a2i8, a2i9, a2i10, a2i11, a3i1, a3i2, a3i3, a3i4, a3i5, a3i6, a3i7, a3i8, a3i9, a3i10', 'numerical', 'max'=>4),
			array('a1i1, a1i2, a1i3, a1i4, a1i5, a1i6, a1i7, a2i1, a2i2, a2i3, a2i4, a2i5, a2i6, a2i7, a2i8, a2i9, a2i10, a2i11, a3i1, a3i2, a3i3, a3i4, a3i5, a3i6, a3i7, a3i8, a3i9, a3i10', 'numerical', 'min'=>0),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, im_id, ev_anio, a1i1, a1i2, a1i3, a1i4, a1i5, a1i6, a1i7, a2i1, a2i2, a2i3, a2i4, a2i5, a2i6, a2i7, a2i8, a2i9, a2i10, a2i11, a3i1, a3i2, a3i3, a3i4, a3i5, a3i6, a3i7, a3i8, a3i9, a3i10, fecha_ev, pro_evaluador, total_ambito1, total_ambito2, total_ambito3, total_logros, porcentaje_logro, observacion, clasificacion, obs01, obs02, obs03, obs04, obs05, obs06, obs07, obs08, obs09, obs10, obs11, obs12, obs13, obs14, obs15, obs16, obs17, obs18, obs19, obs20, obs21, obs22, obs23, obs24, obs25, obs26, obs27, obs28', 'safe', 'on'=>'search'),
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
			'im' => array(self::BELONGS_TO, 'Imparte', 'im_id'),
			'proEvaluador' => array(self::BELONGS_TO, 'TblUser', 'pro_evaluador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'im_id' => 'Profesor',
			'anio' => 'Año',
			'a1i1' => '1.   Existe correlación entre la planificación semestral, y la clase que se observa.',
			'a1i2' => '2.   Comunica claramente lo que espera que los estudiantes aprendan o consoliden en cada clase y establece las relaciones entre las actividades realizadas y los objetivos a alcanzar.',
			'a1i3' => '3.   Las actividades de enseñanza son coherentes con el contenido, adecuadas al tiempo disponible y al nivel del cual se trate.',
			'a1i4' => '4.   Introduce nuevos conceptos con claridad y rigurosidad conceptual.',
			'a1i5' => '5.   Aplica variadas estrategias de enseñanza, por ejemplo, que los estudiantes comparen, clasifiquen, generen analogías y metáforas, resuman, elaboren preguntas, expliquen, modelen conceptos, entre otras.',
			'a1i6' => '6.   Motiva y promueve que los estudiantes practiquen y apliquen las habilidades y conceptos recién adquiridos en forma graduada, variada y distribuida en el tiempo.',
			'a1i7' => '7.   Monitorea, retroalimenta, reconoce y refuerza el trabajo de los estudiantes constantemente. y mantienen una actitud de altas expectativas sobre sus posibilidades de aprendizaje y desarrollo. ',
			'a2i1' => '1.   Genera un clima de confianza y respeto (los estudiantes se atreven a hacer preguntas, frena burlas, acepta comentarios y/o críticas).',
			'a2i2' => '2.   Establece reglas claras, que son conocidas y respetadas por todos los estudiantes, al comenzar la clase, para que ésta se desarrolle en un ambiente propicio para el aprendizaje.',
			'a2i3' => '3.   Maneja estrategias de normalización adecuadas al nivel de los estudiantes, guiando su comportamiento.',
			'a2i4' => '4.   En caso de interrupción de la clase, consigue volver a captar su atención y retomar el trabajo sin grandes demoras.',
			'a2i5' => '5.   Respeta la opinión de sus estudiantes, reforzando la participación en clases y el compromiso de ellos en su aprendizaje.',
			'a2i6' => '6.   Incentiva la participación de todos los alumnos/as en clases.',
			'a2i7' => '7.   Establece un clima de relaciones interpersonales respetuosas y empáticas, promoviendo un trabajo colaborativo entre los estudiantes.',
			'a2i8' => '8.   Organiza el espacio físico de la sala, según el tipo de actividad a realizar, para que éste apoye la metodología de trabajo que se utilizará.',
			'a2i9' => '9.   Utiliza estrategias metodológicas tendientes a favorecer el aprendizaje de los estudiantes que presentan NEE, (material especial, tiempos adicionales, atención personalizada, mediación, etc.).',
			'a2i10' => '10. Se preocupa por el orden y el aseo de la sala, solicitando a los alumnos que limpien, recojan papeles y ordenen los escritorios si es necesario.',
			'a2i11' => '11. Realiza actividades que favorecen el afianzamiento de valores, especialmente el sentido de la solidaridad entre los estudiantes.',
			'a3i1' => '1.   Explica claramente los objetivos y actividades a desarrollar en clases, de modo que sus alumnos comprendan cabalmente lo que se espera de ellos.',
			'a3i2' => '2.   Establece vínculos entre los aprendizajes logrados en la clase anterior y los nuevos a lograr.',
			'a3i3' => '3.   Responde las preguntas que le plantean sus alumnos, de modo de aclarar las dudas acerca de los contenidos tratados en clases.',
			'a3i4' => '4.   Establece vínculos entre los contenidos de su sector con la realidad.',
			'a3i5' => '5.   Utiliza estrategias de retroalimentación que permitan a los alumnos/as darse cuenta de sus logros y/o errores.',
			'a3i6' => '6.   Utiliza metodologías activas y participativas, de modo que los alumnos tengan la posibilidad de involucrarse en su propio aprendizaje.',
			'a3i7' => '7.   Logra que todos los estudiantes participen de manera activa en clases (que estén atentos, pregunten, lean, discutan, ejecuten tareas, entre otros).',
			'a3i8' => '8.   Implementa variadas actividades de acuerdo al tipo y complejidad de los contenidos.',
			'a3i9' => '9.   Maneja recursos didácticos y tecnológicos, en su quehacer pedagógico, de modo de mejorar los niveles de aprendizaje y motivación de los estudiantes.',
			'a3i10' => '10. Realiza un cierre de la clase, en el cual se resumen los principales aspectos abordados en ella.',
			'fecha_ev' => 'Fecha Evaluación',
			
			'pro_evaluador' => 'Profesor Evaluador',
			'total_ambito1' => 'Total Ámbito 1',
			'total_ambito2' => 'Total Ámbito 2',
			'total_ambito3' => 'Total Ámbito 3',
			'total_logros' => 'Total Logros',
			'porcentaje_logro' => 'Porcentaje Logro',
			'observacion' => 'Observación',
			'clasificacion' => 'Clasificación',
			'obs01' => 'Observación',
			'obs02' => 'Observación',
			'obs03' => 'Observación',
			'obs04' => 'Observación',
			'obs05' => 'Observación',
			'obs06' => 'Observación',
			'obs07' => 'Observación',
			'obs08' => 'Observación',
			'obs09' => 'Observación',
			'obs10' => 'Observación',
			'obs11' => 'Observación',
			'obs12' => 'Observación',
			'obs13' => 'Observación',
			'obs14' => 'Observación',
			'obs15' => 'Observación',
			'obs16' => 'Observación',
			'obs17' => 'Observación',
			'obs18' => 'Observación',
			'obs19' => 'Observación',
			'obs20' => 'Observación',
			'obs21' => 'Observación',
			'obs22' => 'Observación',
			'obs23' => 'Observación',
			'obs24' => 'Observación',
			'obs25' => 'Observación',
			'obs26' => 'Observación',
			'obs27' => 'Observación',
			'obs28' => 'Observación',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('im_id',$this->im_id);
		$criteria->compare('ev_anio',$this->ev_anio);
		$criteria->compare('a1i1',$this->a1i1);
		$criteria->compare('a1i2',$this->a1i2);
		$criteria->compare('a1i3',$this->a1i3);
		$criteria->compare('a1i4',$this->a1i4);
		$criteria->compare('a1i5',$this->a1i5);
		$criteria->compare('a1i6',$this->a1i6);
		$criteria->compare('a1i7',$this->a1i7);
		$criteria->compare('a2i1',$this->a2i1);
		$criteria->compare('a2i2',$this->a2i2);
		$criteria->compare('a2i3',$this->a2i3);
		$criteria->compare('a2i4',$this->a2i4);
		$criteria->compare('a2i5',$this->a2i5);
		$criteria->compare('a2i6',$this->a2i6);
		$criteria->compare('a2i7',$this->a2i7);
		$criteria->compare('a2i8',$this->a2i8);
		$criteria->compare('a2i9',$this->a2i9);
		$criteria->compare('a2i10',$this->a2i10);
		$criteria->compare('a2i11',$this->a2i11);
		$criteria->compare('a3i1',$this->a3i1);
		$criteria->compare('a3i2',$this->a3i2);
		$criteria->compare('a3i3',$this->a3i3);
		$criteria->compare('a3i4',$this->a3i4);
		$criteria->compare('a3i5',$this->a3i5);
		$criteria->compare('a3i6',$this->a3i6);
		$criteria->compare('a3i7',$this->a3i7);
		$criteria->compare('a3i8',$this->a3i8);
		$criteria->compare('a3i9',$this->a3i9);
		$criteria->compare('a3i10',$this->a3i10);
		$criteria->compare('fecha_ev',$this->fecha_ev,true);
		$criteria->compare('pro_evaluador',$this->pro_evaluador);
		$criteria->compare('total_ambito1',$this->total_ambito1);
		$criteria->compare('total_ambito2',$this->total_ambito2);
		$criteria->compare('total_ambito3',$this->total_ambito3);
		$criteria->compare('total_logros',$this->total_logros);
		$criteria->compare('porcentaje_logro',$this->porcentaje_logro);
		$criteria->compare('observacion',$this->observacion);
		$criteria->compare('clasificacion',$this->clasificacion,true);
		$criteria->compare('obs01',$this->obs01,true);
		$criteria->compare('obs02',$this->obs02,true);
		$criteria->compare('obs03',$this->obs03,true);
		$criteria->compare('obs04',$this->obs04,true);
		$criteria->compare('obs05',$this->obs05,true);
		$criteria->compare('obs06',$this->obs06,true);
		$criteria->compare('obs07',$this->obs07,true);
		$criteria->compare('obs08',$this->obs08,true);
		$criteria->compare('obs09',$this->obs09,true);
		$criteria->compare('obs10',$this->obs10,true);
		$criteria->compare('obs11',$this->obs11,true);
		$criteria->compare('obs12',$this->obs12,true);
		$criteria->compare('obs13',$this->obs13,true);
		$criteria->compare('obs14',$this->obs14,true);
		$criteria->compare('obs15',$this->obs15,true);
		$criteria->compare('obs16',$this->obs16,true);
		$criteria->compare('obs17',$this->obs17,true);
		$criteria->compare('obs18',$this->obs18,true);
		$criteria->compare('obs19',$this->obs19,true);
		$criteria->compare('obs20',$this->obs20,true);
		$criteria->compare('obs21',$this->obs21,true);
		$criteria->compare('obs22',$this->obs22,true);
		$criteria->compare('obs23',$this->obs23,true);
		$criteria->compare('obs24',$this->obs24,true);
		$criteria->compare('obs25',$this->obs25,true);
		$criteria->compare('obs26',$this->obs26,true);
		$criteria->compare('obs27',$this->obs27,true);
		$criteria->compare('obs28',$this->obs28,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nota the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
