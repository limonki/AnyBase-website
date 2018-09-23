<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$terms_and_conditions = new Template('terms-and-conditions', 'templates/');
$terms_and_conditions->add('SITE.TITLE', $lang->get('TERMS_AND_CONDITIONS_SITE_TITLE'));
$terms_and_conditions->add('SITE.DESCRIPTION', $lang->get('TERMS_AND_CONDITIONS_SITE_DESCRIPTION'));
$terms_and_conditions->add('SITE.AUTHOR', $lang->get('TERMS_AND_CONDITIONS_SITE_AUTHOR'));
$terms_and_conditions->add('MENU.1', $lang->get('MENU_1'));
$terms_and_conditions->add('MENU.2', $lang->get('MENU_2'));
$terms_and_conditions->add('MENU.3', $lang->get('MENU_3'));
$terms_and_conditions->add('MENU.4', $lang->get('MENU_4'));
$terms_and_conditions->add('MENU.5', $lang->get('MENU_5'));
$terms_and_conditions->add('MENU.6', $lang->get('MENU_6'));
$terms_and_conditions->add('MENU.7', $lang->get('MENU_7'));
$terms_and_conditions->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$terms_and_conditions->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$terms_and_conditions->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$terms_and_conditions->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$terms_and_conditions->add('FOOTER', $lang->get('FOOTER'));

$terms_and_conditions->_init();
$terms_and_conditions->show();

?>
