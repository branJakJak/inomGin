<?php
/* @var $this MainLeadController */
/* @var $model MainLeadModel */

$this->breadcrumbs=array(
	'Main Lead Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MainLeadModel', 'url'=>array('index')),
	array('label'=>'Manage MainLeadModel', 'url'=>array('admin')),
);
?>

<h1>Create MainLeadModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>