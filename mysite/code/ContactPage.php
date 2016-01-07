<?php

class ContactPage extends Page {


	private static $db = array (

		'PreferredContactInformation' => 'Text',
		'Email'                       => 'Text',
		'PhoneNumber'                 => 'Text',
		//Turn the following into dropdown or boolean fields. or Checkboxes
		'ContactName'    => 'Text',
		'Website'        => 'Text',
		'Facebook'       => 'Text',
		'Instagram'      => 'Text',
		'Twitter'        => 'Text',
	    'GitHub'        => 'Text',
	    'LinkedIn'        => 'Text',

	);


 	 public function getCMSFields() {

    	$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Contact', new HeaderField('Contact Information'));
    	$fields->addFieldToTab('Root.Contact', new TextField('ContactName'));
		$fields->addFieldToTab('Root.Contact', new TextField('Email'));
		$fields->addFieldToTab('Root.Contact', new TextField('PhoneNumber'));

			$objects = array(
			'(Select one)' => 'Select one',
			'Phone'        => 'Phone',
			'Email'     => 'Email',
			'Facebook'        => 'Facebook');
		$fields->addFieldToTab('Root.Contact', new DropdownField('PreferredContactInformation', 'Preferred Contact', $objects));


		$fields->addFieldToTab('Root.Social', new HeaderField('Social Media Information'));
		$fields->addFieldToTab('Root.Social', new TextField('Facebook'));
		$fields->addFieldToTab('Root.Social', new TextField('Twitter'));
		$fields->addFieldToTab('Root.Social', new TextField('Instagram'));
		$fields->addFieldToTab('Root.Social', new TextField('GitHub'));
		$fields->addFieldToTab('Root.Social', new TextField('LinkedIn'));


    	return $fields;
  	}
}


class ContactPage_Controller extends Page_Controller {

}



