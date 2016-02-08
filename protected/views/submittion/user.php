<?php 

?>
<div class="row-fluid">
    <div class="span10 offset1">
        
<?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'Leads submitted by '.$userModel->username,
    ));
?>
    <?php if (Yii::app()->user->name === 'admin'): ?>
    <?php echo CHtml::link('<i class=" icon-download icon-white"></i> Export contents', array('export','username'=>$userModel->username),['class'=>'btn btn-primary']); ?>
    <?php endif ?>

    <?php 

    $this->widget('zii.widgets.grid.CGridView', array(
    'filter'=>$leadModel,
    'dataProvider'=>$leadModel->search(),
    'columns'=>array(
        'id', 
        'policy_holder_1_title',          // display the 'title' attribute
        'policy_holder_1_forename',          // display the 'title' attribute
        'policy_holder_1_surname',          // display the 'title' attribute
        'policy_holder_1_dateOfBirth',          // display the 'title' attribute
        'policy_holder_1_email',          // display the 'title' attribute
        // 'policy_holder_1_dayTimeTelephone',          // display the 'title' attribute
        array(
            'class'=>'CButtonColumn',
            'templates'=>'{delete}',
            'buttons'=>array(
                'delete'=>array('url'=>'$this->grid->controller->createUrl("/mainLead/delete", array("id"=>$data->primaryKey))')
            )
        ),
    ),
    ));



    ?>




<?php
    $this->endWidget();
?>


    </div>
</div>
