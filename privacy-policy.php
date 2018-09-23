<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$privac_policy = new Template('privacy-policy', 'templates/');
$privac_policy->add('SITE.TITLE', $lang->get('PRIVACY_POLICY_SITE_TITLE'));
$privac_policy->add('SITE.DESCRIPTION', $lang->get('PRIVACY_POLICY_SITE_DESCRIPTION'));
$privac_policy->add('SITE.AUTHOR', $lang->get('PRIVACY_POLICY_SITE_AUTHOR'));
$privac_policy->add('MENU.1', $lang->get('MENU_1'));
$privac_policy->add('MENU.2', $lang->get('MENU_2'));
$privac_policy->add('MENU.3', $lang->get('MENU_3'));
$privac_policy->add('MENU.4', $lang->get('MENU_4'));
$privac_policy->add('MENU.5', $lang->get('MENU_5'));
$privac_policy->add('MENU.6', $lang->get('MENU_6'));
$privac_policy->add('MENU.7', $lang->get('MENU_7'));
$privac_policy->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$privac_policy->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$privac_policy->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$privac_policy->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$privac_policy->add('FOOTER', $lang->get('FOOTER'));

$privac_policy->_init();
$privac_policy->show();

?>
