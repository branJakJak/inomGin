<?php 

?>
<div class="row-fluid">
    <div class="span10 offset1">
        
<?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'Leads submitted by '.$userModel->username,
    ));
?>
    <br>
    <?php if (Yii::app()->user->name === 'admin'): ?>
    <?php echo CHtml::link('<i class=" icon-download icon-white"></i> Export contents', array('export','username'=>$userModel->username),['class'=>'btn btn-primary']); ?>
    <?php endif ?>


<?php 

?>
<?php 

    $this->widget('zii.widgets.grid.CGridView', array(
    'filter'=>$leadModel,
    'dataProvider'=>$leadModel->search(),
    'columns'=>array(
        array(
            'name'=>'date_created',
            'filter'=>CHtml::textField('name', '', array('style'=>'visibility: hidden;')),
            'header'=>'Date Submitted',
            'value'=>'date("M j, Y H:i:s", strtotime($data->date_created))',
        ),
        
        'id', 
        'closer',
        'policy_holder_1_title',          // display the 'title' attribute
        'policy_holder_1_forename',          // display the 'title' attribute
        'policy_holder_1_surname',          // display the 'title' attribute
        // array(            // display 'create_time' using an expression
        //      'name'=>'policy_holder_1_dateOfBirth',
        //     'header'=>'Date of birth',
        //     'value'=>'date("M j, Y", strtotime($data->policy_holder_1_dateOfBirth))',
        // ),
        array(
            'name'=>'add_account',
            'header'=>'Add account',
            'value'=>'$data->add_account',
        ),
        // array(
        //     'name'=>'date_created',
        //     'header'=>'Submitted',
        //     'value'=>'$data->date_created',
        // ),
        // 'date_created',
        
        // array(
        //     'name' => 'date_created',
        //     'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        //         'language'=>'',
        //         'model'=>$leadModel, 
        //         'attribute'=>'date_created', 
        //         'htmlOptions' => array(
        //         ),
        //         'defaultOptions' => array(
        //             'showOn' => 'focus', 
        //             'dateFormat' => 'yy-mm-dd',
        //             'showOtherMonths' => true,
        //             'selectOtherMonths' => true,
        //             'changeMonth' => true,
        //             'changeYear' => true,
        //             'showButtonPanel' => true,
        //         )
        //     ), 
        //     true),
        // ),

        // 'policy_holder_1_dateOfBirth',          // display the 'title' attribute
        // 'policy_holder_1_email',          // display the 'title' attribute
        // 'policy_holder_1_dayTimeTelephone',          // display the 'title' attribute
        array(
            'class'=>'application.components.RepopulateLinkColumn',
            'header'=>'View',
        ),
        array(
            'class'=>'CButtonColumn',
            'header'=>'delete',
            'template'=>'{delete}',
            'buttons'=>array(
                'delete'=>array('url'=>'$this->grid->controller->createUrl("/mainLead/delete", array("id"=>$data->primaryKey))'),
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



