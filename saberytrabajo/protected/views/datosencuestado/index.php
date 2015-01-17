<?php
/* @var $this DatosencuestadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datosencuestados',
);

$this->menu=array(
	array('label'=>'Agregar Encuestado', 'url'=>array('create')),
	array('label'=>'Volver', 'url'=>array('admin')),
);
?>

<h1>Datosencuestados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
