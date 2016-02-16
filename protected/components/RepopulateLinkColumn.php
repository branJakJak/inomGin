<?php 

/**
* RepopulateLinkColumn
*/
class RepopulateLinkColumn extends CLinkColumn
{
	public function getDataCellContent($row)
	{
		
		$data=$this->grid->dataProvider->data[$row];
		$linkParameters = array();
		$linkParameters[] = '/site/index';//route
		$linkParameters = array_merge($linkParameters, $data->attributes);
		return CHtml::link(CHtml::image($this->grid->baseScriptUrl.'/view.png', 'View', array()), $linkParameters, array());
	}
}