<?php

namespace Miraheze\ManageWiki\Specials;

use Miraheze\ManageWiki\Helpers\ManageWikiFlaggedWikiPager;
use SpecialPage;

class SpecialFlaggedWikis extends SpecialPage {
	public function __construct() {
		parent::__construct( 'FlaggedWikis',  'managewiki-flag' );
	}

	public function execute( $par ) {
		parent::execute( $par );
		$this->setHeaders();
		$this->outputHeader();

		$pager = new ManageWikiFlaggedWikiPager( $this );

		$this->getOutput()->addParserOutputContent( $pager->getFullOutput() );
	}
}
