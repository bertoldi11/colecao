<?php
/* @var $this LivroController */
/* @var $data Livro */
?>
<style>
.exibeAutor{
	padding-left: 10px;

}
</style>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLivro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLivro), array('view', 'id'=>$data->idLivro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editora')); ?>:</b>
	<?php echo CHtml::encode($data->idEditora0->razaoSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paginas')); ?>:</b>
	<?php echo CHtml::encode($data->paginas); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('autor(es)')); ?>:</b>
	<br />
	<?php foreach($data->autors as $autor):?>
		<div class="exibeAutor">
			- <?php echo CHtml::encode($autor->nome); ?> <br />
		</div>
	<?php endforeach;?>
	<br />

</div>