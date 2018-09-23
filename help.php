<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$help = new Template('help', 'templates/');
$help->add('SITE.TITLE', $lang->get('HELP_SITE_TITLE'));
$help->add('SITE.DESCRIPTION', $lang->get('HELP_SITE_DESCRIPTION'));
$help->add('SITE.AUTHOR', $lang->get('HELP_SITE_AUTHOR'));
$help->add('MAIN.PAGE', $lang->get('HELP_MAIN_PAGE'));
$help->add('DOWNLOAD', $lang->get('HELP_DOWNLOADS'));
$help->add('SEARCH.ENGINE', $lang->get('HELP_SEARCH_ENGINE'));
$help->add('SEARCH.PLACEHOLDER', $lang->get('HELP_SEARCH_PLACEHOLDER'));

$help->_init();
$help->show();

?>
