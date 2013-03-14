<?php
/* @var $this LivroController */
/* @var $model Livro */

$this->breadcrumbs=array(
	'Livros'=>array('index'),
	$model->idLivro,
);

$this->menu=array(
	array('label'=>'Listar Livro', 'url'=>array('index')),
	array('label'=>'Cadastrar Livro', 'url'=>array('create')),
	array('label'=>'Alterar Livro', 'url'=>array('update', 'id'=>$model->idLivro)),
	array('label'=>'Apagar Livro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLivro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Livro', 'url'=>array('admin')),
);
?>

<h1>Ver Livro #<?php echo $model->idLivro; ?></h1>
	

<?php 
$autores = '';
foreach($model->autors as $autor)
{
	$autores.= $autor->nome.'<br>';
}	

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLivro',
		'idEditora0.razaoSocial',
		'titulo',
		'subtitulo',
		'paginas',
		array(               // related city displayed as a link
            'label'=>'Autor(es)',
            'type'=>'raw',
            'value'=> $autores//CHtml::link(CHtml::encode($model->autors->nome), array('city/view','id'=>$model->city->id)),
        )
	),
)); 
?>
