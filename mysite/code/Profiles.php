<?php

class Profile extends DataObject {

	private static $db = array(
		'Name' => 'Text',
		'Title'  => 'Text',
		'Content' => 'HTMLText',
	);

	private static $has_one = array(
		'AboutPage' => 'AboutPage',
		'ProfilePicture' => 'Image',
	);

	private static $summary_fields = array(
		'Title',
		'Content',
	);


}