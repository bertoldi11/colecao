<?php

/**
 * This is the model class for table "autor".
 *
 * The followings are the available columns in table 'autor':
 * @property integer $idAutor
 * @property string $nome
 * @property string $email
 * @property string $site
 *
 * The followings are the available model relations:
 * @property Livro[] $livros
 */
class Autor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Autor the static model class
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
		return 'autor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome', 'length', 'max'=>60),
			array('email, site', 'length', 'max'=>100),
			array('nome', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idAutor, nome, email, site', 'safe', 'on'=>'search'),
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
			'livros' => array(self::MANY_MANY, 'Livro', 'autorlivro(idAutor, idLivro)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAutor' => 'Cod. Autor',
			'nome' => 'Nome',
			'email' => 'Email',
			'site' => 'Site',
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

		$criteria->compare('idAutor',$this->idAutor);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('site',$this->site,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}