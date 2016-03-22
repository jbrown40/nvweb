<?php

class Profile extends DataObject {

	private static $db = array(
		'Name' => 'Varchar(225)',
		'Title'  => 'Varchar(225)',
		'Content' => 'Text',
	);

	private static $has_one = array(
		'AboutPage' => 'AboutPage',
		'ProfilePicture' => 'Image',
	);

	private static $summary_fields = array(
		'Name',
	);


}