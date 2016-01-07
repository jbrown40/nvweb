<?php

//model: contains all the custom database fields, data relationships, and functionality that can be expressed across multiple templates
class HomePage extends Page{


private static $db = array(

		'TopText' => 'Text',
		'MiddleText' => 'Text',
		'BottomText' => 'Text',
		'TopImage' => 'Image',
		'MiddleImage' => 'Image',
		'BottomImage' => 'Image',
		//'PreferredContactInformation' => 'Text',
		//Turn the following into dropdown or boolean fields. or Checkboxes
		//'Indoors'        => 'Boolean',
		//'Catering'       => 'Boolean',
		//'AirConditioned' => 'Boolean',
		//'ContactName'    => 'Text',
		//'Website'        => 'Text',
		//'Facebook'       => 'Text',
		//'Instagram'      => 'Text',
		//'Twitter'        => 'Text',

	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();


		$fields->addFieldToTab('Root.Main', new TextField('Top'));
		$fields->addFieldToTab('Root.Main', new TextField('Middle'));
		$fields->addFieldToTab('Root.Main', new TextField('Bottom'));

		$fields->addFieldToTab('Root.Main', new UploadField('TopImage', 'Image (1920x1080 or 1280x720)'), 'Content');
		$fields->addFieldToTab('Root.Main', new UploadField('MiddleImage', 'Image (1920x1080 or 1280x720)'), 'Content');
		$fields->addFieldToTab('Root.Main', new UploadField('BottomImage', 'Image (1920x1080 or 1280x720)'), 'Content');


		return $fields;
	}


}

//every page type has to have one
//liason between http request and finalized template
//functions for quering the database, user auth, business logic


class HomePage_Controller extends Page_Controller{

}