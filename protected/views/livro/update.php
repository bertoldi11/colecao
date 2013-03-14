<?php
/* @var $this LivroController */
/* @var $model Livro */

$this->breadcrumbs=array(
	'Livros'=>array('index'),
	$model->idLivro=>array('view','id'=>$model->idLivro),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Livro', 'url'=>array('index')),
	array('label'=>'Cadastrar Livro', 'url'=>array('create')),
	array('label'=>'Ver Livro', 'url'=>array('view', 'id'=>$model->idLivro)),
	array('label'=>'Gerenciar Livro', 'url'=>array('admin')),
);
?>

<h1>Alterar Livro <?php echo $model->idLivro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>