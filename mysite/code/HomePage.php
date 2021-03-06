<?php

//model: contains all the custom database fields, data relationships, and functionality that can be expressed across multiple templates
class HomePage extends Page{


	private static $db = array (

		'InformationOne' => 'Varchar(225)',
	    'InformationTwo' => 'Varchar(225)',
	    'InformationThree' => 'Varchar(225)', 

	    'HeaderOne' => 'Text',
	    'HeaderTwo' => 'Text',
	    'HeaderThree' => 'Text', 

	);

 	 public function getCMSFields() {
    	$fields = parent::getCMSFields();

			$fields->addFieldToTab('Root.Media', TextField::create('HeaderOne'));   
			$fields->addFieldToTab('Root.Media', TextareaField::create('InformationOne'));
  			
  			$fields->addFieldToTab('Root.Media', TextField::create('HeaderTwo'));
    		$fields->addFieldToTab('Root.Media', TextareaField::create('InformationTwo'));

    		$fields->addFieldToTab('Root.Media', TextField::create('HeaderThree'));   
    		$fields->addFieldToTab('Root.Media', TextareaField::create('InformationThree'));


    	return $fields;
  	}

}

//every page type has to have one
//liason between http request and finalized template
//functions for quering the database, user auth, business logic


class HomePage_Controller extends Page_Controller{

}