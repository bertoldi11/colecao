<?php

/**
 * This is the model class for table "livro".
 *
 * The followings are the available columns in table 'livro':
 * @property integer $idLivro
 * @property integer $idUsuario
 * @property integer $idEditora
 * @property string $titulo
 * @property string $subtitulo
 * @property integer $paginas
 *
 * The followings are the available model relations:
 * @property Autor[] $autors
 * @property Editora $idEditora0
 * @property Usuario $idUsuario0
 * @property Movimentacao[] $movimentacaos
 */
class Livro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Livro the static model class
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
		return 'livro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, idEditora', 'required'),
			array('idUsuario, idEditora, paginas', 'numerical', 'integerOnly'=>true),
			array('titulo, subtitulo', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idLivro, idUsuario, idEditora, titulo, subtitulo, paginas', 'safe', 'on'=>'search'),
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
			'autors' => array(self::MANY_MANY, 'Autor', 'autorlivro(idLivro, idAutor)'),
			'idEditora0' => array(self::BELONGS_TO, 'Editora', 'idEditora'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'movimentacaos' => array(self::HAS_MANY, 'Movimentacao', 'idLivro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idLivro' => 'Cod. Livro',
			'idUsuario' => 'Cod. Usuario',
			'idEditora' => 'Editora',
			'titulo' => 'Titulo',
			'subtitulo' => 'Subtitulo',
			'paginas' => 'Paginas',
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

		$criteria->compare('idLivro',$this->idLivro);
		$criteria->compare('idEditora',$this->idEditora);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo',$this->subtitulo,true);
		$criteria->compare('paginas',$this->paginas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}