<?php
/* @var $this MainLeadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Main Lead Models',
);

$this->menu=array(
	array('label'=>'Create MainLeadModel', 'url'=>array('create')),
	array('label'=>'Manage MainLeadModel', 'url'=>array('admin')),
);
?>

<h1>Main Lead Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
