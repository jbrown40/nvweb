<?php

class FAQ extends Page {

	private static $db = array (

	);
	private static $has_many = array(
		'QAndA' => 'QAndA',
	);


 	 public function getCMSFields() {
    	$fields = parent::getCMSFields();

			$faqFieldConfig = GridFieldConfig_RelationEditor::create();
			$faqGridField   = new GridField('QAndA', 'Questions and Answers', $this->QAndA(), $faqFieldConfig);
			$fields->addFieldToTab('Root.FAQ', $faqGridField);


    	return $fields;
  	}
}

class FAQ_Controller extends Page_Controller {

}