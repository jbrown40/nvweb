<?php

class QAndA extends DataObject {

	private static $db = array(
		'Question' => 'Text',
		'Answer'  => 'Text',
	);

	private static $has_one = array(
		'FAQPage' => 'FAQ',
	);

	private static $summary_fields = array(
		'Question',
		'Answer',
	);


}