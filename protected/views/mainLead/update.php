<?php
/* @var $this MainLeadController */
/* @var $model MainLeadModel */

$this->breadcrumbs=array(
	'Main Lead Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MainLeadModel', 'url'=>array('index')),
	array('label'=>'Create MainLeadModel', 'url'=>array('create')),
	array('label'=>'View MainLeadModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MainLeadModel', 'url'=>array('admin')),
);
?>

<h1>Update MainLeadModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>