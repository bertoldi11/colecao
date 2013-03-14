<?php

class ConsultaController extends Controller
{
	public $layout='//layouts/column2';
	
	
	public function filters()
	{
		return array(
			'accessControl'
		);
	}
	
	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions'=>array('index','livro'),
				'users'=>array('@')
			),
			array(
				'deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionLivro(){
		$dataProvider=new CActiveDataProvider('Livro', array(
		    'criteria'=>array(
		        'with'=>array('Autor','Pessoa'),
		    ),
		    'pagination'=>array(
		        'pageSize'=>10,
		    ),
		));
			
		$this->render('livros',array(
			'dataProvider'=>$dataProvider,
		));
	}
}