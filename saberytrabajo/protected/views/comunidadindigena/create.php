<?php
/* @var $this ComunidadindigenaController */
/* @var $model Comunidadindigena */


$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Administrador', 'url'=>array('admin')),
);
?>

<h1>Agregar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>