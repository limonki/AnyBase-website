<?php

require_once('includes/definitions.php');
require_once(__ROOT__.'/includes/template.php');
require_once(__ROOT__.'/includes/language.php');
require_once(__ROOT__.'/languages/'.language());

$index = new Template('index', 'templates/');
$index->add('SITE.TITLE', $lang->get('INDEX_SITE_TITLE'));
$index->add('SITE.DESCRIPTION', $lang->get('INDEX_SITE_DESCRIPTION'));
$index->add('SITE.AUTHOR', $lang->get('INDEX_SITE_AUTHOR'));
$index->add('MENU.1', $lang->get('MENU_1'));
$index->add('MENU.2', $lang->get('MENU_2'));
$index->add('MENU.3', $lang->get('MENU_3'));
$index->add('MENU.4', $lang->get('MENU_4'));
$index->add('MENU.5', $lang->get('MENU_5'));
$index->add('MENU.6', $lang->get('MENU_6'));
$index->add('MENU.7', $lang->get('MENU_7'));
$index->add('COOKIES.TITLE', $lang->get('COOKIES_TITLE'));
$index->add('COOKIES.TEXT', $lang->get('COOKIES_TEXT'));
$index->add('COOKIES.AGREE', $lang->get('COOKIES_AGREE'));
$index->add('COOKIES.MORE.INFO', $lang->get('COOKIES_MORE_INFO'));
$index->add('INDEX.MAIN.TITLE', $lang->get('INDEX_MAIN_TITLE'));
$index->add('INDEX.MAIN.TITLE.TEXT.1', $lang->get('INDEX_MAIN_TITLE_TEXT_1'));
$index->add('INDEX.MAIN.TITLE.TEXT.2', $lang->get('INDEX_MAIN_TITLE_TEXT_2'));
$index->add('INDEX.BUTTON.1', $lang->get('INDEX_BUTTON_1'));
$index->add('INDEX.BUTTON.2', $lang->get('INDEX_BUTTON_2'));
$index->add('INDEX.CURRENT.VER', $lang->get('INDEX_CURRENT_VER'));
$index->add('INDEX.CURRENT.VER.NUM', $lang->get('INDEX_CURRENT_VER_NUM'));
$index->add('INDEX.NOTE.1', $lang->get('INDEX_NOTE_1'));
$index->add('INDEX.NOTE.1.TEXT', $lang->get('INDEX_NOTE_1_TEXT'));
$index->add('INDEX.NOTE.1.BUTTON', $lang->get('INDEX_NOTE_1_BUTTON'));
$index->add('INDEX.NOTE.2', $lang->get('INDEX_NOTE_2'));
$index->add('INDEX.NOTE.2.TEXT', $lang->get('INDEX_NOTE_2_TEXT'));
$index->add('INDEX.NOTE.2.BUTTON', $lang->get('INDEX_NOTE_2_BUTTON'));
$index->add('INDEX.NOTE.3', $lang->get('INDEX_NOTE_3'));
$index->add('INDEX.NOTE.3.TEXT', $lang->get('INDEX_NOTE_3_TEXT'));
$index->add('INDEX.NOTE.3.BUTTON', $lang->get('INDEX_NOTE_3_BUTTON'));
$index->add('INDEX.NOTE.3.BUTTON', $lang->get('INDEX_NOTE_3_BUTTON'));
$index->add('FOOTER', $lang->get('FOOTER'));
$index->_init();
$index->show();

?>
