<?php
namespace Sy\Component\Web;

use Sy\Component\WebComponent;

class GoogleAnalytics extends WebComponent {

	/**
	 * Google Analytics id
	 *
	 * @var string
	 */
	private $id;

	public function __construct($id) {
		parent::__construct();
		$this->id = $id;
	}

	public function __toString() {
		$this->init();
		return parent::__toString();
	}

	private function init() {
		$this->addJsLink('https://www.googletagmanager.com/gtag/js?id=' . $this->id, array('load' => 'async'));
		$this->setTemplateContent('');

		$js = new WebComponent();
		$js->setTemplateFile(__DIR__ . '/gtag.js');
		$js->setVar('ID', $this->id);
		$this->addJsCode($js);
	}

}