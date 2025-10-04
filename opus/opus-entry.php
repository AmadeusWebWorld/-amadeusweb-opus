<?php
DEFINE('AMADEUSPRODUCT', 'opus');
define('OPUSENGINE', __DIR__);

if (!defined('SITEPATH'))
	DEFINE('SITEPATH', OPUSENGINE);

DEFINE('SECTIONSBASE', OPUSENGINE);

include_once OPUSENGINE . '/../../dawn/entry.php';

if (defined('DEFAULTVARS'))
	variables(DEFAULTVARS);

$testable = '';
//So that no need to deploy child sites for now!
if (!DEFINED('OPUSSITE')) {
	$site = getQueryParameter('site');
	if (!$site) $site = disk_file_get_contents(__DIR__ . '/site.txt');
	DEFINE('OPUSSITE', ALLSITESROOT . '/' . $site);
	$testable .= 'site=' . $site . '&';
}
	
if (!DEFINED('OPUSUSER')) {
	$user = getQueryParameter('user');
	if (!$user) $user = disk_file_get_contents(__DIR__ . '/user.txt');
	DEFINE('OPUSUSER', $user);
	$testable .= 'user=' . $user . '&';
}

DEFINE('TESTABLE', $testable);

runExtension('opus');
