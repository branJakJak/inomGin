<?php 

?>
<style type="text/css">
#list-user li a{
	padding: 20px;
	font-size: 20px !important;
}
#list-user li a strong{
	float: right !important;	
}
.list-user-report {
    width: 228px;
    margin: 30px 0 0;
    padding: 0;
    background-color: #fff;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
    box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
}	

</style>


<div class="row-fluid">
	<div class="span6 offset3">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Submittion',
			));
		?>
		<?php echo CHtml::image('//icons.iconarchive.com/icons/oxygen-icons.org/oxygen/72/Places-user-identity-icon.png', 'User submittion'); ?>
		<strong style="
    font-size: 33px;
    position: relative;
    top: 22px;
"
		 >Agent's Submitted Leads</strong>
		<br>
		<hr>
		<?php $itemsCollection = []; ?>
		<?php foreach ($data as $key => $currentData): ?>
			<?php $currentUserModel = $currentData[0] ?>
			<?php $submittionCount = $currentData[1] ?>
			<?php 
				$itemsCollection[] = [
					'label'=>$currentUserModel->username .  '<strong>'.$submittionCount.'</strong>','type'=>'raw',
					'url'=>['/submittion/user','username'=>$currentUserModel->username]
				];
			?>
		<?php endforeach ?>


		<?php $this->widget('bootstrap.widgets.TbNav', array(
			"id"=>"list-user",
			"encodeLabel"=>false,
		    'type' => TbHtml::NAV_TYPE_LIST,
		    'items' => $itemsCollection,
		)); ?>
		<hr>
		<?php echo CHtml::link('<h3>Download all</h3>', array('exportAll'), array('class'=>'btn btn-primary btn-block')); ?>

		<?php
			$this->endWidget();
		?>		


	</div>
</div>



