<?php
class Page extends SiteTree {

	private static $db = array(
	);


	private static $has_one = array(
		'CoverImage' => 'Image',

	);

 	 public function getCMSFields() {
    	$fields = parent::getCMSFields();

    		$fields->addFieldToTab('Root.Main', new UploadField('CoverImage', 'Cover Image'), 'Content');


    	return $fields;
  	}


}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

			Requirements::css($this->ThemeDir()."/css/bootstrap.min.css");
			
			Requirements::css("http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic");
			
			Requirements::css("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");

			Requirements::css($this->ThemeDir()."/font-awesome/css/font-awesome.min.css");

			Requirements::css($this->ThemeDir()."/css/animate.min.css");

			Requirements::css($this->ThemeDir()."/css/creative.css");

			Requirements::Javascript($this->ThemeDir()."/js/jquery.js");

			Requirements::Javascript($this->ThemeDir()."/js/bootstrap.min.js");

			Requirements::Javascript($this->ThemeDir()."/js/jquery.easing.min.js");

			Requirements::Javascript($this->ThemeDir()."/js/jquery.fittext.js");
			Requirements::Javascript($this->ThemeDir()."/js/wow.min.js");

			Requirements::Javascript($this->ThemeDir()."/js/creative.js");
   
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

}
