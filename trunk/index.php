<?php

namespace Pronamic\Twinfield;

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once 'library/bootstrap.php';

require_once 'config.php';

$twinfieldClient = new TwinfieldClient();

$result = $twinfieldClient->logon(TWINFIELD_USERNAME, TWINFIELD_PASSWORD, TWINFIELD_ORGANISATION);

include 'views/header.php';

if($result) {
	include 'views/front-page.php';
} else {
	include 'views/error.php';
}

include 'views/footer.php';
