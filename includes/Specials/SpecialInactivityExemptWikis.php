<?php

namespace Miraheze\ManageWiki\Specials;

use Miraheze\ManageWiki\Helpers\ManageWikiInactivityExemptWikiPager;
use IncludableSpecialPage;

class SpecialInactivityExemptWikis extends IncludableSpecialPage {
	public function __construct() {
		parent::__construct( 'InactivityExemptWikis' );
	}

	public function execute( $par ) {
		$this->setHeaders();
		$this->outputHeader();

		$pager = new ManageWikiInactivityExemptWikiPager( $this );

		$this->getOutput()->addParserOutputContent( $pager->getFullOutput() );
	}
}
