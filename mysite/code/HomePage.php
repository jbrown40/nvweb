<?php

//model: contains all the custom database fields, data relationships, and functionality that can be expressed across multiple templates
class HomePage extends Page{


	private static $db = array (

		'InformationOne' => 'Varchar(225)',
	    'InformationTwo' => 'Varchar(225)',
	    'InformationThree' => 'Varchar(225)', 

	);

	private static $has_one = array(
		'ImageOne' => 'Image',
		'ImageTwo' => 'Image',
		'ImageThree' => 'Image',

	);

 	 public function getCMSFields() {
    	$fields = parent::getCMSFields();


			$fields->addFieldToTab('Root.Main', TextareaField::create('InformationOne'), 'Content');   
			$fields->addFieldToTab('Root.Main', new UploadField('ImageOne', 'Image'), 'Content');

    		$fields->addFieldToTab('Root.Main', TextareaField::create('InformationTwo'), 'Content');
 			$fields->addFieldToTab('Root.Main', new UploadField('ImageTwo', 'Image'), 'Content');

    		$fields->addFieldToTab('Root.Main', TextareaField::create('InformationThree'), 'Content');
			$fields->addFieldToTab('Root.Main', new UploadField('ImageThree', 'Image'), 'Content');


    	return $fields;
  	}

}

//every page type has to have one
//liason between http request and finalized template
//functions for quering the database, user auth, business logic


class HomePage_Controller extends Page_Controller{

}