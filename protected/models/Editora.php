<?php

/**
 * This is the model class for table "editora".
 *
 * The followings are the available columns in table 'editora':
 * @property integer $idEditora
 * @property string $cnpj
 * @property string $razaoSocial
 * @property string $nomeFantasia
 * @property string $telefone
 * @property string $fax
 * @property string $email
 * @property string $site
 *
 * The followings are the available model relations:
 * @property Livro[] $livros
 */
class Editora extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Editora the static model class
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
		return 'editora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cnpj', 'length', 'max'=>15),
			array('razaoSocial, nomeFantasia', 'length', 'max'=>80),
			array('telefone, fax', 'length', 'max'=>11),
			array('email, site', 'length', 'max'=>100),
			array('razaoSocial', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idEditora, cnpj, razaoSocial, nomeFantasia, telefone, fax, email, site', 'safe', 'on'=>'search'),
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
			'livros' => array(self::HAS_MANY, 'Livro', 'idEditora'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEditora' => 'Cod. Editora',
			'cnpj' => 'CNPJ',
			'razaoSocial' => 'Razão Social Editora',
			'nomeFantasia' => 'Nome Fantasia',
			'telefone' => 'Telefone',
			'fax' => 'Fax',
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

		$criteria->compare('idEditora',$this->idEditora);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('razaoSocial',$this->razaoSocial,true);
		$criteria->compare('nomeFantasia',$this->nomeFantasia,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('site',$this->site,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}