<?php

class ContactPage extends Page {

	private static $db = array (

		'PreferredContactInformation' => 'Text',
	    

	);


 	public function getCMSFields() {
    	$fields = parent::getCMSFields();


			$objects = array(
			'(Select one)' => 'Select one',
			'Phone'        => 'Phone',
			'Facebook'     => 'Facebook',
			'Email'        => 'Email');
		$fields->addFieldToTab('Root.Contact', new DropdownField('PreferredContactInformation', 'Preferred Contact Information', $objects));


    	return $fields;
  	}

}


class ContactPage_Controller extends Page_Controller {

}



