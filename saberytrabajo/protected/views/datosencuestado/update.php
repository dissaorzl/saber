<?php
/* @var $this DatosencuestadoController */
/* @var $model Datosencuestado */

$this->breadcrumbs=array(
	'Datosencuestados'=>array('index'),
	$model->cod_dp_enc=>array('view','id'=>$model->cod_dp_enc),
	'Update',
);

$this->menu=array(
	array('label'=>'Agregar Encuestado', 'url'=>array('create')),
	array('label'=>'Ver Encuestado', 'url'=>array('view', 'id'=>$model->cod_dp_enc)),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Update Datosencuestado <?php echo $model->cod_dp_enc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>