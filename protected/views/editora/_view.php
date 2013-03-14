<?php
/* @var $this EditoraController */
/* @var $data Editora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEditora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEditora), array('view', 'id'=>$data->idEditora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razaoSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razaoSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeFantasia')); ?>:</b>
	<?php echo CHtml::encode($data->nomeFantasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('site')); ?>:</b>
	<?php echo CHtml::encode($data->site); ?>
	<br />

	*/ ?>

</div>