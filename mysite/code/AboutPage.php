<?php

class AboutPage extends Page {


	private static $db = array (
		'StaffPictureOne' = 'Image',
		'StaffPictureTwo' = 'Image',
		'StaffPictureThree' = 'Image',
	);

	public function getCMSFields() {
    	$fields = parent::getCMSFields();

    		$fields->addFieldToTab('Root.Main', new UploadField('StaffPictureOne', 'Staff Bio Image'), 'Content');
    		$fields->addFieldToTab('Root.Main', new UploadField('StaffPictureTwo', 'Staff Bio Image'), 'Content');
    		$fields->addFieldToTab('Root.Main', new UploadField('StaffPictureThree', 'Staff Bio Image'), 'Content');

    	return $fields;
  	}



}

class AboutPage_Controller extends Page_Controller {

}