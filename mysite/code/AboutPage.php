<?php

class AboutPage extends Page {

	private static $db = array (

	);
	private static $has_many = array(
		'Profiles' => 'Profile',
	);

 	 public function getCMSFields() {
    	$fields = parent::getCMSFields();

			$profileFieldConfig = GridFieldConfig_RelationEditor::create();
			$profileGridField   = new GridField('Profiles', 'Team Member Profiles', $this->Profiles(), $profileFieldConfig);
			$fields->addFieldToTab('Root.Profiles', $profileGridField);


    	return $fields;
  	}


}

class AboutPage_Controller extends Page_Controller {

}