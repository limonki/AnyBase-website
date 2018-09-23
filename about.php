<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$about = new Template('about', 'templates/');
$about->add('SITE.TITLE', $lang->get('ABOUT_SITE_TITLE'));
$about->add('SITE.DESCRIPTION', $lang->get('ABOUT_SITE_DESCRIPTION'));
$about->add('SITE.AUTHOR', $lang->get('ABOUT_SITE_AUTHOR'));
$about->add('MENU.1', $lang->get('MENU_1'));
$about->add('MENU.2', $lang->get('MENU_2'));
$about->add('MENU.3', $lang->get('MENU_3'));
$about->add('MENU.4', $lang->get('MENU_4'));
$about->add('MENU.5', $lang->get('MENU_5'));
$about->add('MENU.6', $lang->get('MENU_6'));
$about->add('MENU.7', $lang->get('MENU_7'));
$about->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$about->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$about->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$about->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$about->add('ABOUT.TITLE', $lang->get('ABOUT_TITLE'));
$about->add('ABOUT.TEXT', $lang->get('ABOUT_TEXT'));
$about->add('ABOUT.TITLE.1', $lang->get('ABOUT_TITLE_1'));
$about->add('ABOUT.TEXT.1', $lang->get('ABOUT_TEXT_1'));
$about->add('FOOTER', $lang->get('FOOTER'));
$about->_init();
$about->show();

?>
